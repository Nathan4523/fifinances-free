<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id_dinamic = Auth::user()->id;
        
        $cost = DB::table('tb_conta')->where('codigo_user_conta_simples', Auth::user()->id)->limit(5)->get();

        $notes = DB::table('tb_anotacoes')->where('codigo_user_notas', $id_dinamic)->get();
            
        return view('home', ['cost' => $cost, 'notes' => $notes]);
        
    }

    public function show()
    {   
        return view('my_account');
    }

    public function showSetting()
    {   
        return view('setting');
    }

    public function sendEmail(Request $request)
    {
        $messagem = '';

        $mensagem = '<strong>'.$request->input('nome').' entrou em contato <br>';
        $mensagem .= 'Segue os dados da pessoa<br>';
        $mensagem .= 'E-mail: <strong>'.$request->input('email').'<br>';
        $mensagem .= 'Mensagem: <strong>'.$request->input('mensagem').'<br>';

        $mail = new PHPMailer(true);                                                 // Passing `true` enables exceptions
        try {
            //Server settings
            $mail->SMTPDebug = 0;                                                    // Enable verbose debug output
            $mail->isSMTP();         
            $mail->charSet = "UTF-8";                                                 // Set mailer to use SMTP
            $mail->Host = env('CONTATO_EMAIL_SMTP');                                 // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                                                  // Enable SMTP authentication
            $mail->Username = env('CONTATO_EMAIL');                                  // SMTP username
            $mail->Password = env('CONTATO_EMAIL_PASSWORD');                         // SMTP password
            $mail->SMTPSecure = env('CONTATO_EMAIL_SEGURANCA');                      // Enable TLS encryption, `ssl` also accepted
            $mail->Port = env('CONTATO_EMAIL_PORT');                                 // TCP port to connect to

            //Recipients
            $mail->setFrom(env('CONTATO_EMAIL'), 'Fifinances - Suporte');
            $mail->addAddress(env('CONTATO_EMAIL_RECEPTOR'));                        // Add a recipient
            $mail->addReplyTo($request->input('email'), $request->input('nome'));     

            //Content
            $mail->isHTML(true);                                                     // Set email format to HTML
            $mail->Subject = 'Solicitação do suporte';
            $mail->Body    = $mensagem;

            $mail->send();
            $request->session()->flash('success', "Enviado com sucesso");

            return redirect()->back();
        } catch (Exception $e) {
            $request->session()->flash('error', $mail->ErrorInfo);
            return redirect()->back();
        }
    }

    public function update(Request $request, $id)
    {
        $user_id = User::find($id);
        $user_id->update($request->all());
        $request->session()->flash('success', "Dados atualizados com sucesso");
        return redirect()->back();
    }

    public function uploadImgPerfil(Request $request)
    {
        if ($request->hasFile('file')) {
            $id_dinamic = Auth::user()->id;

            $filename = str_random(30) . '.' . $request->file('file')->getClientOriginalExtension();
            
            $user_folder = 'foto_perfil_'.$request->id;

            $destination = public_path() . DIRECTORY_SEPARATOR . 'storage' . DIRECTORY_SEPARATOR . $user_folder;

            $fullpath = DIRECTORY_SEPARATOR . 'storage' . DIRECTORY_SEPARATOR . $user_folder . DIRECTORY_SEPARATOR . $filename;

            if (Storage::allFiles($user_folder) == []) {
                $request->file('file')->move($destination, $filename);
                DB::table('users')->where('id', $id_dinamic)->update(['imagem' => $fullpath]);
            } else {
                $files = Storage::files($user_folder);
                if (count($files) != 0) {
                    Storage::delete($files[0]);
                    $request->file('file')->move($destination, $filename);
                    DB::table('users')->where('id', $id_dinamic)->update(['imagem' => $fullpath]);
                }
            }
            $request->session()->flash('success', "Foto inserida com sucesso");
            return redirect()->back();
        }else{
            $request->session()->flash('error', "Erro ao inserir a foto");
            return redirect()->back()-with("Erro ao fazer upload de fotos");
        }
    }
}