<?php

namespace App\Http\Controllers;

use App\Models\Certainty;
use App\Models\Diagnose;
use App\Models\Disease;
use App\Models\Symptom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DiagnoseController extends Controller
{
    public function index()
    {
        $symptoms = Symptom::all();
        return view("pages.diagnosa.index", compact("symptoms"));
    }

    public function diagnosa(Request $request)
    {

        try {
            $symptomIds = $request->symptoms;
            $valueP = $request->value;
            
            $diagnoses = Diagnose::where("user_id", Auth::user()->id)->first();
            if($diagnoses){
                $diagnoses->symptomps = json_encode($symptomIds);
                $diagnoses->value = json_encode($valueP);
                $diagnoses->save();
            }else{
                Diagnose::create([
                    'user_id' => Auth::user()->id,
                    "symptomps" => json_encode($symptomIds),
                    "value" => json_encode($valueP),
                ]);
            }

            $dataDiagnosa = [];
    
            foreach ($symptomIds as $key => $id) {
                // echo "". $id ."" .$key."<br/>";
                array_push($dataDiagnosa, [$id, $valueP[$key]]);
            }
    
            $diseases = Disease::whereHas('symptoms', function ($query) use ($symptomIds) {
                $query->whereIn('symptoms.id', $symptomIds);
            })->get();
            
            $diseaseIds = [];
            foreach ($diseases as $key => $disease) {
                $jumlah = 0;
                $data = [];
                foreach ($disease->symptoms as $symptom) {
                    if(in_array($symptom->id, $symptomIds)){
                        $jumlah += 1;
                        array_push($data, $symptom->pivot->value);
                    }
                }
                if(count($symptomIds) /2 <= $jumlah){
                    array_push($diseaseIds, $key);
                }
             
            }
    
            $diagnosaAkhir = [];
    
            foreach ($diseaseIds as $diseaseId => $idx) {
    
                $disease = $diseases[$idx];
                // echo $disease->name."<br/>";
               
                $symIds = [];
                $syms = [];
                foreach ($disease->symptoms as $symptom){
                    if(in_array($symptom->id, $symptomIds)){
                        array_push($symIds, $symptom->id);
                        array_push($syms, $symptom);
                    }
                }
                // echo implode(",", $symIds);
    
                // echo implode(",", $symIds) . "<br/>";
                
                $data = [];
                foreach($symptomIds as $key => $sid){
                    if(in_array($sid, array_column($syms, "id"))){
                        foreach($syms as $sym){
                            if($sym->id == $sid){
                                // echo "CFGejala". $key+1 . ":". $sym->pivot->value ."*" . $valueP[$key]." <br/>";
                                array_push($data, $sym->pivot->value * $valueP[$key]);
                            }
                        }
                    }else{
                        // echo "CFGejala". $key+1 .":". 0 ."*". $valueP[$key]." <br/>";
                        array_push($data, 0 * $valueP[$key]);
    
                        
                    }
                }
                // echo implode(",", $data) ."<br/>";
    
                $CFcombined = $data[0];
                $no = 1;
                while (count($data) - 1 >= $no) {
                    $new = $CFcombined + $data[$no] * ( 1 - abs($CFcombined));
                    // echo $CFcombined ."+" . $data[$no] . "* (" . 1 . "-" . abs($CFcombined).") = ".$new." <br/>";
                    $CFcombined = $new;
                    $no ++;
    
                }
    
                // echo $CFcombined*100 ."% <br/>";
                array_push($diagnosaAkhir, [
                    "disease" => $disease->name,
                    "certainty" => $CFcombined * 100,
                    "description" => $disease->description,
                    "suggestion" => $disease->suggestion
                ]);
            }
    
            $symptoms = Symptom::whereIn("id", $symptomIds)->get();
            $labels = [];
            $values = [];
            
            for($i = 0; $i < count($diagnosaAkhir); $i++){
                $labels[] = $diagnosaAkhir[$i]['disease'];
                $values[] = $diagnosaAkhir[$i]['certainty'];
            }

            // Mencari nilai certainty tertinggi
            $maxCertainty = max(array_column($diagnosaAkhir, 'certainty'));

            // Mencari data dengan certainty tertinggi
            $disease = array_filter($diagnosaAkhir, function ($item) use ($maxCertainty) {
                return $item['certainty'] == $maxCertainty;
            });
            $disease = reset($disease);
            return view("pages.diagnosa.diagnosa", compact("diagnosaAkhir", "symptoms", "disease", "labels", "values"));
        } catch (\Throwable $th) {
            // dd($th);
            return redirect()->back()->with("error", "Harus mengisi diagnosa terlebih dahulu");
        }

       
    }

    public function result()
    {
        $diagnoses = Diagnose::where('user_id', Auth::user()->id)->first();

        try {
            $symptomIds = json_decode($diagnoses->symptomps);
            $valueP = json_decode($diagnoses->value);
            // dd($diagnoses->symptomps, $symptomIds);
    
    

            $dataDiagnosa = [];
    
            foreach ($symptomIds as $key => $id) {
                // echo "". $id ."" .$key."<br/>";
                array_push($dataDiagnosa, [$id, $valueP[$key]]);
            }
    
            $diseases = Disease::whereHas('symptoms', function ($query) use ($symptomIds) {
                $query->whereIn('symptoms.id', $symptomIds);
            })->get();
            
            $diseaseIds = [];
            foreach ($diseases as $key => $disease) {
                $jumlah = 0;
                $data = [];
                foreach ($disease->symptoms as $symptom) {
                    if(in_array($symptom->id, $symptomIds)){
                        $jumlah += 1;
                        array_push($data, $symptom->pivot->value);
                    }
                }
                if(count($symptomIds) /2 <= $jumlah){
                    array_push($diseaseIds, $key);
                }
             
            }
    
            $diagnosaAkhir = [];
    
            foreach ($diseaseIds as $diseaseId => $idx) {
    
                $disease = $diseases[$idx];
                // echo $disease->name."<br/>";
               
                $symIds = [];
                $syms = [];
                foreach ($disease->symptoms as $symptom){
                    if(in_array($symptom->id, $symptomIds)){
                        array_push($symIds, $symptom->id);
                        array_push($syms, $symptom);
                    }
                }
                // echo implode(",", $symIds);
    
                // echo implode(",", $symIds) . "<br/>";
                
                $data = [];
                foreach($symptomIds as $key => $sid){
                    if(in_array($sid, array_column($syms, "id"))){
                        foreach($syms as $sym){
                            if($sym->id == $sid){
                                // echo "CFGejala". $key+1 . ":". $sym->pivot->value ."*" . $valueP[$key]." <br/>";
                                array_push($data, $sym->pivot->value * $valueP[$key]);
                            }
                        }
                    }else{
                        // echo "CFGejala". $key+1 .":". 0 ."*". $valueP[$key]." <br/>";
                        array_push($data, 0 * $valueP[$key]);
    
                        
                    }
                }
                // echo implode(",", $data) ."<br/>";
    
                $CFcombined = $data[0];
                $no = 1;
                while (count($data) - 1 >= $no) {
                    $new = $CFcombined + $data[$no] * ( 1 - abs($CFcombined));
                    // echo $CFcombined ."+" . $data[$no] . "* (" . 1 . "-" . abs($CFcombined).") = ".$new." <br/>";
                    $CFcombined = $new;
                    $no ++;
    
                }
    
                // echo $CFcombined*100 ."% <br/>";
                array_push($diagnosaAkhir, [
                    "disease" => $disease->name,
                    "certainty" => $CFcombined * 100,
                    "description" => $disease->description,
                    "suggestion" => $disease->suggestion
                ]);
            }
            // die;
            $symptoms = Symptom::whereIn("id", $symptomIds)->get();
            $labels = [];
            $values = [];
            
            for($i = 0; $i < count($diagnosaAkhir); $i++){
                $labels[] = $diagnosaAkhir[$i]['disease'];
                $values[] = $diagnosaAkhir[$i]['certainty'];
            }

            // Mencari nilai certainty tertinggi
            $maxCertainty = max(array_column($diagnosaAkhir, 'certainty'));

            // Mencari data dengan certainty tertinggi
            $disease = array_filter($diagnosaAkhir, function ($item) use ($maxCertainty) {
                return $item['certainty'] == $maxCertainty;
            });
            $disease = reset($disease);
            return view("pages.diagnosa.diagnosa", compact("diagnosaAkhir", "symptoms", 'labels', 'values', 'disease'));
        } catch (\Throwable $th) {
            // dd($th);
            return redirect()->back()->with("error", "Harus mengisi diagnosa terlebih dahulu");
        }
    }

    public function print()
    {
        $diagnoses = Diagnose::where('user_id', Auth::user()->id)->first();

        try {
            $symptomIds = json_decode($diagnoses->symptomps);
            $valueP = json_decode($diagnoses->value);
            // dd($diagnoses->symptomps, $symptomIds);
    
    

            $dataDiagnosa = [];
    
            foreach ($symptomIds as $key => $id) {
                // echo "". $id ."" .$key."<br/>";
                array_push($dataDiagnosa, [$id, $valueP[$key]]);
            }
    
            $diseases = Disease::whereHas('symptoms', function ($query) use ($symptomIds) {
                $query->whereIn('symptoms.id', $symptomIds);
            })->get();
            
            $diseaseIds = [];
            foreach ($diseases as $key => $disease) {
                $jumlah = 0;
                $data = [];
                foreach ($disease->symptoms as $symptom) {
                    if(in_array($symptom->id, $symptomIds)){
                        $jumlah += 1;
                        array_push($data, $symptom->pivot->value);
                    }
                }
                if(count($symptomIds) /2 <= $jumlah){
                    array_push($diseaseIds, $key);
                }
             
            }
    
            $diagnosaAkhir = [];
    
            foreach ($diseaseIds as $diseaseId => $idx) {
    
                $disease = $diseases[$idx];
                // echo $disease->name."<br/>";
               
                $symIds = [];
                $syms = [];
                foreach ($disease->symptoms as $symptom){
                    if(in_array($symptom->id, $symptomIds)){
                        array_push($symIds, $symptom->id);
                        array_push($syms, $symptom);
                    }
                }
                // echo implode(",", $symIds);
    
                // echo implode(",", $symIds) . "<br/>";
                
                $data = [];
                foreach($symptomIds as $key => $sid){
                    if(in_array($sid, array_column($syms, "id"))){
                        foreach($syms as $sym){
                            if($sym->id == $sid){
                                // echo "CFGejala". $key+1 . ":". $sym->pivot->value ."*" . $valueP[$key]." <br/>";
                                array_push($data, $sym->pivot->value * $valueP[$key]);
                            }
                        }
                    }else{
                        // echo "CFGejala". $key+1 .":". 0 ."*". $valueP[$key]." <br/>";
                        array_push($data, 0 * $valueP[$key]);
    
                        
                    }
                }
                // echo implode(",", $data) ."<br/>";
    
                $CFcombined = $data[0];
                $no = 1;
                while (count($data) - 1 >= $no) {
                    $new = $CFcombined + $data[$no] * ( 1 - abs($CFcombined));
                    // echo $CFcombined ."+" . $data[$no] . "* (" . 1 . "-" . abs($CFcombined).") = ".$new." <br/>";
                    $CFcombined = $new;
                    $no ++;
    
                }
    
                // echo $CFcombined*100 ."% <br/>";
                array_push($diagnosaAkhir, [
                    "disease" => $disease->name,
                    "certainty" => $CFcombined * 100,
                    "description" => $disease->description,
                    "suggestion" => $disease->suggestion
                ]);
            }
            // die;
            $symptoms = Symptom::whereIn("id", $symptomIds)->get();
            $labels = [];
            $values = [];
            
            for($i = 0; $i < count($diagnosaAkhir); $i++){
                $labels[] = $diagnosaAkhir[$i]['disease'];
                $values[] = $diagnosaAkhir[$i]['certainty'];
            }

            // Mencari nilai certainty tertinggi
            $maxCertainty = max(array_column($diagnosaAkhir, 'certainty'));

            // Mencari data dengan certainty tertinggi
            $disease = array_filter($diagnosaAkhir, function ($item) use ($maxCertainty) {
                return $item['certainty'] == $maxCertainty;
            });
            $disease = reset($disease);
            return view("pages.diagnosa.print", compact("diagnosaAkhir", "symptoms", 'labels', 'values', 'disease'));
        } catch (\Throwable $th) {
            // dd($th);
            return redirect()->back()->with("error", "Harus mengisi diagnosa terlebih dahulu");
        }
    }
}
