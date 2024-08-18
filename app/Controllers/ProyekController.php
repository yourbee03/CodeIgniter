<?php

namespace App\Controllers;

use App\Libraries\RestClient;

class ProyekController extends BaseController
{
    protected $restClient;

    public function __construct()
    {
        $this->restClient = new RestClient();
    }

    // Halaman utama menampilkan list proyek dan lokasi
    public function index()
    {
        $data['proyek'] = $this->restClient->request('GET', '/proyek');
        $data['lokasi'] = $this->restClient->request('GET', '/lokasi');
        return view('proyek/index', $data);
    }

    // Halaman input proyek dan lokasi
    public function create()
    {
        $data['lokasi'] = $this->restClient->request('GET', '/lokasi');
        return view('proyek/create', $data);
    }

    // Proses input proyek
    public function store()
{
    // Ambil data dari POST
    $data = [
        'namaProyek' => $this->request->getPost('namaProyek'),
        'client' => $this->request->getPost('client'),
        'tglMulai' => $this->request->getPost('tglMulai'),
        'tglSelesai' => $this->request->getPost('tglSelesai'),
        'pimpinanProyek' => $this->request->getPost('pimpinanProyek'),
        'keterangan' => $this->request->getPost('keterangan'),
        'lokasiList' => [
            ['id' => 1],
            ['id' => 2]
        ]
    ];
    

    // Log the data being sent
    log_message('debug', 'Data to be sent to API: ' . json_encode($data));

    $response = $this->restClient->request('POST', '/proyek', $data);

    // Log the response
    log_message('debug', 'API response: ' . json_encode($response));

    return redirect()->to('/proyek');
}



    // Halaman edit proyek dan lokasi
    public function edit($id)
    {
        // Log the request URL
        log_message('debug', 'Fetching project with ID: ' . $id);

        $responseProyek = $this->restClient->request('GET', '/proyek/' . $id);
        
        // Log the response
        log_message('debug', 'API response: ' . json_encode($responseProyek));

        $data['proyek'] = $responseProyek;
        $data['lokasi'] = $this->restClient->request('GET', '/lokasi');

        return view('proyek/edit', $data);
    }

    // Proses update proyek
    public function update($id)
    {
        $data = [
            'namaProyek' => $this->request->getPost('namaProyek'),
            'client' => $this->request->getPost('client'),
            'tglMulai' => $this->request->getPost('tglMulai'),
            'tglSelesai' => $this->request->getPost('tglSelesai'),
            'pimpinanProyek' => $this->request->getPost('pimpinanProyek'),
            'keterangan' => $this->request->getPost('keterangan'),
            'lokasiList' => [
            ['id' => 1],
            ['id' => 2]
            ]
        ];

        $response = $this->restClient->request('PUT', '/proyek/' . $id, $data);
        
        // Log the response
        log_message('debug', 'API response: ' . json_encode($response));

        return redirect()->to('/proyek');
    }

    // Proses hapus proyek
    public function delete($id)
    {
        $response = $this->restClient->request('DELETE', '/proyek/' . $id);
        
        // Log the response
        log_message('debug', 'API response: ' . json_encode($response));

        return redirect()->to('/proyek');
    }
}
