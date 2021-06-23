<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Book;

class BookController extends BaseController
{
	public function dashboard()
	{
		return view('admin/index');
	}
	public function index(){
		$buku = new Book;
		$data = $buku->findAll();
		return view('admin/buku/index', compact('data'));
	}

	public function create(){
		return view('admin/buku/create');
	}

	public function store(){
		$judul = $this->request->getVar('judul');
		$penerbit = $this->request->getVar('penerbit');
		$keterangan = $this->request->getVar('keterangan');
		$file = $this->request->getFile('foto');
		$namaFoto = $file->getName();

		$data = [
			'judul' => $judul,
			'penerbit' => $penerbit,
			'foto' => $namaFoto,
			'keterangan' => $keterangan,
		];

		$buku = new Book;
		$buku->insert($data);
		$id = $buku->getInsertID();
		if($id){
			$file->move('image/', $namaFoto);
			return redirect()->to('/buku/edit/'.$id);
		}
	}

	public function edit($id){
		$buku = new Book;
		$data = $buku->find($id);

		return view('admin/buku/edit', compact('data'));
	}

	public function update(){
		$id = $this->request->getVar('id');
		$judul = $this->request->getVar('judul');
		$penerbit = $this->request->getVar('penerbit');
		$keterangan = $this->request->getVar('keterangan');
		$file = $this->request->getFile('foto');
		$namaFoto = $file->getName();

		if($namaFoto != ''){
			$data = [
				'judul' => $judul,
				'penerbit' => $penerbit,
				'foto' => $namaFoto,
				'keterangan' => $keterangan,
			];
	
			$buku = new Book;
			$buku->update($id,$data);
			if($id){
				$file->move('image/', $namaFoto);
				return redirect()->to('/buku/edit/'.$id);
			}
		}else{
			$data = [
				'judul' => $judul,
				'penerbit' => $penerbit,
				'keterangan' => $keterangan,
			];
	
			$buku = new Book;
			$buku->update($id,$data);
			if($id){
				return redirect()->to('/buku/edit/'.$id);
			}
		}
	}
	public function delete($id){
		$book = new Book;
		$book->delete($id);

		return redirect()->to('/buku');
	}
}
