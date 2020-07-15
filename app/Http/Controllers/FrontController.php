<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use App\Mail\ContactRecieved;
use Illuminate\Support\Facades\Mail;

class FrontController extends Controller
{
    public function home(){
        $parodont = "Parodontologia";
        $pulizia = "Pulizia dentale";
        $cura = "Cura preventiva";
        $descr1 = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores esse nulla nesciunt tempore deleniti accusantium consequuntur doloremque beatae.";
        $descr2 = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores esse nulla nesciunt tempore deleniti accusantium consequuntur doloremque beatae.";
        $descr3 = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores esse nulla nesciunt tempore deleniti accusantium consequuntur doloremque beatae.";
        $brand = 'DENTAMARO';
        $chisiamo = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores esse nulla nesciunt tempore deleniti accusantium consequuntur doloremque beatae.";
       

        return view('welcome', ['brand'=>$brand , 'chisiamo'=>$chisiamo, 'parodont'=>$parodont, 'pulizia'=>$pulizia, 'cura'=>$cura, 'descr1'=>$descr1, 'descr2'=>$descr2, 'descr3'=>$descr3] );
    }

   public function chisiamo(){

    $chisiamo="Chi Siamo";
    $story="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellat aliquam aperiam corrupti deserunt perferendis, repudiandae officia sapiente assumenda aut molestiae, adipisci ipsam accusantium id quod accusamus illo ex incidunt? Sunt.";
    $title="Il nostro";
    $cont= "STAFF";
    $staff= [
        ['name'=>'Dr. Galizia Domenico', 'prof'=>'Dentista', 'desc'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit.', 'img'=>'/media/galizia.png'],
        ['name'=>'Dr.ssa Martino Stella', 'prof'=>'Dentista Pediatrica', 'desc'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit.', 'img'=>'/media/stella.png'],
        ['name'=>'Dr. Santagata Michele', 'prof'=>'Ortopantomografo', 'desc'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit.', 'img'=>'/media/santagata.png'],
        ['name'=>'Rossi Paola', 'prof'=>'Odontotecnico', 'desc'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit.', 'img'=>'/media/rossi.png'],
        ['name'=>'Dr. Lucibello Simone', 'prof'=>'Dentista', 'desc'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit.', 'img'=>'/media/lucibello.png'],
        ['name'=>'Dr.ssa Iacobellis Sara', 'prof'=>'Chirurgo', 'desc'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit.', 'img'=>'/media/iacobellis.png']
    ];

    return view('chisiamo', ['chisiamo'=>$chisiamo,'story'=>$story,'title'=>$title,'cont'=>$cont,'staff'=>$staff]);
   }

   public function servizi(){

    $nostri="I NOSTRI";
    $servizi="SERVIZI";
    $ser=[
        $ser1=[
            ['name'=>'Sbiancamento Dentale', 'desc'=>'Clicca sulla foto per avere più dettagli', 'img'=>'/media/whitening.jpeg', 'dett'=>' Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo cupiditate obcaecati cumque expedita quidem quod optio numquam deserunt quis repudiandae saepe officiis, natus vel neque facilis consequuntur! Maxime, vero. Temporibus!'],
            ['name'=>'Ortodonzia', 'desc'=>'Clicca sulla foto per avere più dettagli', 'img'=>'/media/ortodonzia.jpeg', 'dett'=>' Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo cupiditate obcaecati cumque expedita quidem quod optio numquam deserunt quis repudiandae saepe officiis, natus vel neque facilis consequuntur! Maxime, vero. Temporibus!']
        ],
        $ser2=[
            ['name'=>'Chirurgia', 'desc'=>'Clicca sulla foto per avere più dettagli', 'img'=>'/media/chirurgia.jpeg', 'dett'=>' Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo cupiditate obcaecati cumque expedita quidem quod optio numquam deserunt quis repudiandae saepe officiis, natus vel neque facilis consequuntur! Maxime, vero. Temporibus!'],
            ['name'=>'Odontoiatria Pediatrica', 'desc'=>'Clicca sulla foto per avere più dettagli', 'img'=>'/media/pedodonzia.jpeg', 'dett'=>' Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo cupiditate obcaecati cumque expedita quidem quod optio numquam deserunt quis repudiandae saepe officiis, natus vel neque facilis consequuntur! Maxime, vero. Temporibus!']
        ]
    ];
    
    
    
    return view('servizi', ['nostri'=>$nostri, 'servizi'=>$servizi, 'ser'=>$ser]);
   }

   public function contacts(){
       $mess = "Prenota una Visita";
       $disclaimer = "Premendo Invia aderisci automaticamente a quel lunghissimo documento sui Termini e Servizi che sicuramente non ti sei disturbato a leggere";
     return view('contacts' , ['mess'=>$mess,'disclaimer'=>$disclaimer]);
   }

   public function submit(Request $request){
       
       $contact= new Contact();
       
       $contact->email=$request->input('email');
       $contact->phone=$request->input('phone');

       $contact->save();

       /* dd($contact); */

       /* $email=$request->input('email');
       $phone=$request->input('phone'); */

       /* $contact = compact('email','phone');

       Mail::to($email)->send(new ContactRecieved($contact));
     */
       return redirect(route('thank-you'));
   }

   public function thankyou(){
       return view('thankyou');
   }


   public function details($name){
    $ser=[
        $ser1=[
            ['name'=>'Sbiancamento Dentale', 'desc'=>'Clicca sulla foto per avere più dettagli', 'img'=>'/media/whitening.jpeg', 'dett'=>' Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo cupiditate obcaecati cumque expedita quidem quod optio numquam deserunt quis repudiandae saepe officiis, natus vel neque facilis consequuntur! Maxime, vero. Temporibus!'],
            ['name'=>'Ortodonzia', 'desc'=>'Clicca sulla foto per avere più dettagli', 'img'=>'/media/ortodonzia.jpeg', 'dett'=>' Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo cupiditate obcaecati cumque expedita quidem quod optio numquam deserunt quis repudiandae saepe officiis, natus vel neque facilis consequuntur! Maxime, vero. Temporibus!']
        ],
        $ser2=[
            ['name'=>'Chirurgia', 'desc'=>'Clicca sulla foto per avere più dettagli', 'img'=>'/media/chirurgia.jpeg', 'dett'=>' Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo cupiditate obcaecati cumque expedita quidem quod optio numquam deserunt quis repudiandae saepe officiis, natus vel neque facilis consequuntur! Maxime, vero. Temporibus!'],
            ['name'=>'Odontoiatria Pediatrica', 'desc'=>'Clicca sulla foto per avere più dettagli', 'img'=>'/media/pedodonzia.jpeg', 'dett'=>' Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo cupiditate obcaecati cumque expedita quidem quod optio numquam deserunt quis repudiandae saepe officiis, natus vel neque facilis consequuntur! Maxime, vero. Temporibus!']
        ]
    ];
    foreach($ser as $s){
        for($i=0;$i<count($s);$i++){
        if($s[$i]['name']==$name){
            $selectedName=$s[$i];
            return view('dettaglio', ['selectedName'=>$selectedName]);
        }
    }
    }

     return abort(404);    
   }
}
