<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BookSeeder extends Seeder
{
	public function run()
	{
		$data = [
			'judul' => 'Kancil',
			'penerbit'    => 'erlangga',
			'keterangan'    => 'anak-anak',
			'foto'    => '1a.jpg',
	];

	$this->db->table('books')->insert($data);
	}
}
