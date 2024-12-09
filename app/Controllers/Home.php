<?php

namespace App\Controllers;
use App\Models\M_apotek;


class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}

	public function login()
	{
		echo view('pages-login');
	}
	public function aksi_login()
	{
		$a=$this->request->getPost('username');
		$b=$this->request->getPost('password');

		$aku= new M_apotek;
		$data = array(
			"username"=>$a,
			"PASSWORD"=>$b,
		);

		$cek = $aku->getWhere('user',$data);

		if ($cek != null) {

			session()->set('id', $cek->id_user);
			session()->set('u', $cek->username);        
			session()->set('level', $cek->level);

			return redirect ()->to('home/dashboard');
		}else{
			return redirect ()->to('home/Login');
		}
	}

	public function regis()
	{
		echo view('pages-register');
	}
	public function aksi_regis()
	{
		$a=$this->request->getPost('username');
		$b=$this->request->getPost('password');
        $id=$this->request->getPost('id');

		$aku= new M_apotek;

        $berak= array(
            'id_user'=> $id,
        );

        $data= array(
        "username"=>$a,
        "password"=>$b,
        'id_user' => $id,
        );

        $aku->input('user', $data, $berak);
        return redirect()->to('home/login');
	}


	public function Dashboard()
	{
		if (session()->get('id')>0) {
			echo view('Ra');
			echo view('RaJo');
			echo view('dashboard');
			echo view('Jo');
		}else{
			return redirect()->to('home/login');
		}
	}


	public function user()
	{
		if (session()-> get('level')==1) {
        $aku= new M_apotek;
        $where=('id_user');
        $suka['mencret']= $aku->tampil('user', $where);
        echo view('Ra');
        echo view('RaJo');
        echo view('user',$suka);
        echo view('Jo');
        }else{
			return redirect()->to('home/dashboard');
		}
	}


	public function karyawan()
	{
		if (session()-> get('level')==1) {
        $aku= new M_apotek;
        $where=('id_kry');
        $suka['mencret']= $aku->tampil('karyawan', $where);
        echo view('Ra');
        echo view('RaJo');
        echo view('karyawan',$suka);
        echo view('Jo');
        }else{
			return redirect()->to('home/dashboard');
		}
	}

	
	public function member()
	{
		if (session()-> get('level')==1) {
        $aku= new M_apotek;
        $where=('id_member');
        $suka['mencret']= $aku->tampil('member', $where);
        echo view('Ra');
        echo view('RaJo');
        echo view('member',$suka);
        echo view('Jo');
        }else{
			return redirect()->to('home/dashboard');
		}
	}

	
	public function obat()
	{
		if (session()->get('level') == 1 || session()->get('level') == 2 || session()->get('level') == 3){
        $aku= new M_apotek;
        $where=('id_obat');
        $suka['mencret']= $aku->tampil('obat', $where);
        echo view('Ra');
        echo view('RaJo');
        echo view('obat',$suka);
        echo view('Jo');
        }else{
			return redirect()->to('home/dashboard');
		}
	}


}