<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Responden;
use App\Models\Penilaian;

class RespondenController extends Controller
{
    public function asesmenList()
    {
        // Ambil semua data dari tabel responden
        $respondens = Responden::all();

        // Kirim data ke view
        return view('asesmen', compact('respondens'));
    }


    public function storeIdentitas(Request $request)
    {
        $validatedData = $request->validate([
            'institution' => 'required|string|max:255',
            'address' => 'required|string',
            'phone' => 'required|string|max:15',
            'email' => 'required|email',
            'evaluator' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'date' => 'required|date',
            'scope' => 'required|string',
        ]);

        // Ambil ID jika ada
        $respondenId = $request->input('id');

        // Perbarui data jika ID ditemukan, jika tidak buat data baru
        $responden = Responden::updateOrCreate(
            ['id' => $respondenId], // Kondisi pencarian berdasarkan ID
            $validatedData           // Data yang akan disimpan atau diperbarui
        );

        return redirect()->route('sistem-elektronik', ['responden_id' => $responden->id]);
    }


    public function editIdentitas($id)
    {
        $responden = Responden::findOrFail($id);

        return view('edit-responden', compact('responden'));
    }

    public function retrieveIdentitas($id)
    {
        $responden = Responden::findOrFail($id);

        return response()->json($responden);
    }


    public function storeSistemElektronik(Request $request, $responden_id)
    {
        // Validasi data yang masuk
        $validatedData = $request->validate([
            'q1' => 'required|integer|min:1|max:5',
            'q2' => 'required|integer|min:1|max:5',
            'q3' => 'required|integer|min:1|max:5',
            'q4' => 'required|integer|min:1|max:5',
            'q5' => 'required|integer|min:1|max:5',
            'q6' => 'required|integer|min:1|max:5',
            'q7' => 'required|integer|min:1|max:5',
            'q8' => 'required|integer|min:1|max:5',
            'q9' => 'required|integer|min:1|max:5',
            'q10' => 'required|integer|min:1|max:5',
        ]);

        // Simpan ke tabel penilaian
        Penilaian::updateOrCreate(
            [
                'responden_id' => $responden_id,
                'kategori' => 'sistem-elektronik',
            ],
            [
                'jawaban' => json_encode($validatedData),
            ]
        );

        // Redirect ke Tata Kelola
        return redirect()->route('tata-kelola', ['responden_id' => $responden_id]);
    }

    public function storeTataKelola(Request $request, $responden_id)
{
    try {
        // Validasi data
        $validatedData = $request->validate([
            'q1' => 'required|integer|min:0|max:10',
            'q2' => 'required|integer|min:0|max:10',
            'q3' => 'required|integer|min:0|max:10',
            'q4' => 'required|integer|min:0|max:10',
            'q5' => 'required|integer|min:0|max:10',
            'q6' => 'required|integer|min:0|max:10',
            'q7' => 'required|integer|min:0|max:10',
            'q8' => 'required|integer|min:0|max:10',
            'q9' => 'required|integer|min:0|max:10',
            'q10' => 'required|integer|min:0|max:10',
            'q11' => 'required|integer|min:0|max:10',
            'q12' => 'required|integer|min:0|max:10',
            'q13' => 'required|integer|min:0|max:10',
            'q14' => 'required|integer|min:0|max:10',
            'q15' => 'required|integer|min:0|max:10',
            'q16' => 'required|integer|min:0|max:10',
            'q17' => 'required|integer|min:0|max:10',
            'q18' => 'required|integer|min:0|max:10',
            'q19' => 'required|integer|min:0|max:10',
            'q20' => 'required|integer|min:0|max:10',
            'q21' => 'required|integer|min:0|max:10',
            'q22' => 'required|integer|min:0|max:10',
        ]);

        // Simpan data
        Penilaian::updateOrCreate([
            'responden_id' => $responden_id,
            'kategori' => 'tata-kelola',
        ], [
            'jawaban' => json_encode($validatedData),
        ]);

        \Log::info("Redirecting to pengelolaan-resiko for responden_id: {$responden_id}");
        return redirect()->route('pengelolaan-resiko', ['responden_id' => $responden_id]);

    } catch (\Illuminate\Validation\ValidationException $e) {
        \Log::error('Validation errors: ' . json_encode($e->errors()));
        return redirect()->back()->withErrors($e->errors())->withInput();
    }
}


    public function storePengelolaanResiko(Request $request, $responden_id)
    {
    // Validasi data yang masuk
    $validatedData = $request->validate([
        'q1' => 'required|integer|min:0|max:10',
        'q2' => 'required|integer|min:0|max:10',
        'q3' => 'required|integer|min:0|max:10',
        'q4' => 'required|integer|min:0|max:10',
        'q5' => 'required|integer|min:0|max:10',
        'q6' => 'required|integer|min:0|max:10',
        'q7' => 'required|integer|min:0|max:10',
        'q8' => 'required|integer|min:0|max:10',
        'q9' => 'required|integer|min:0|max:10',
        'q10' => 'required|integer|min:0|max:10',
        'q11' => 'required|integer|min:0|max:10',
        'q12' => 'required|integer|min:0|max:10',
        'q13' => 'required|integer|min:0|max:10',
        'q14' => 'required|integer|min:0|max:10',
        'q15' => 'required|integer|min:0|max:10',
        'q16' => 'required|integer|min:0|max:10',
        // Tambahkan validasi untuk semua pertanyaan yang ada
    ]);

    // Simpan data ke tabel penilaian
    Penilaian::updateOrCreate(
        [
            'responden_id' => $responden_id,
            'kategori' => 'pengelolaan-resiko',
        ],
        [
            'jawaban' => json_encode($validatedData),
        ]
    );

    // Redirect ke kategori berikutnya
    return redirect()->route('kerangka-kerja', ['responden_id' => $responden_id]);
    }

    public function storeKerangkaKerja(Request $request, $responden_id)
    {
    $validatedData = $request->validate([
        'q1' => 'required|integer|min:0|max:10',
        'q2' => 'required|integer|min:0|max:10',
        'q3' => 'required|integer|min:0|max:10',
        'q4' => 'required|integer|min:0|max:10',
        'q5' => 'required|integer|min:0|max:10',
        'q6' => 'required|integer|min:0|max:10',
        'q7' => 'required|integer|min:0|max:10',
        'q8' => 'required|integer|min:0|max:10',
        'q9' => 'required|integer|min:0|max:10',
        'q10' => 'required|integer|min:0|max:10',
        'q11' => 'required|integer|min:0|max:10',
        'q12' => 'required|integer|min:0|max:10',
        'q13' => 'required|integer|min:0|max:10',
        'q14' => 'required|integer|min:0|max:10',
        'q15' => 'required|integer|min:0|max:10',
        'q16' => 'required|integer|min:0|max:10',
        'q17' => 'required|integer|min:0|max:10',
        'q18' => 'required|integer|min:0|max:10',
        'q19' => 'required|integer|min:0|max:10',
        'q20' => 'required|integer|min:0|max:10',
        'q21' => 'required|integer|min:0|max:10',
        'q22' => 'required|integer|min:0|max:10',
        'q23' => 'required|integer|min:0|max:10',
        'q24' => 'required|integer|min:0|max:10',
        'q25' => 'required|integer|min:0|max:10',
        'q26' => 'required|integer|min:0|max:10',
        'q27' => 'required|integer|min:0|max:10',
        'q28' => 'required|integer|min:0|max:10',
        'q29' => 'required|integer|min:0|max:10',
        'q30' => 'required|integer|min:0|max:10',
        'q31' => 'required|integer|min:0|max:10',
        'q32' => 'required|integer|min:0|max:10',
        'q33' => 'required|integer|min:0|max:10',
    ]);

    Penilaian::updateOrCreate(
        [
            'responden_id' => $responden_id,
            'kategori' => 'kerangka-kerja',
        ],
        [
            'jawaban' => json_encode($validatedData),
        ]
    );

    \Log::info("Kerangka Kerja berhasil disimpan untuk responden_id: {$responden_id}");

    return redirect()->route('pengelolaan-aset', ['responden_id' => $responden_id]);
    }

    public function storePengelolaanAset(Request $request, $responden_id)
    {
    $validatedData = $request->validate([
        'q1' => 'required|integer|min:0|max:10',
        'q2' => 'required|integer|min:0|max:10',
        'q3' => 'required|integer|min:0|max:10',
        'q4' => 'required|integer|min:0|max:10',
        'q5' => 'required|integer|min:0|max:10',
        'q6' => 'required|integer|min:0|max:10',
        'q7' => 'required|integer|min:0|max:10',
        'q8' => 'required|integer|min:0|max:10',
        'q9' => 'required|integer|min:0|max:10',
        'q10' => 'required|integer|min:0|max:10',
        'q11' => 'required|integer|min:0|max:10',
        'q12' => 'required|integer|min:0|max:10',
        'q13' => 'required|integer|min:0|max:10',
        'q14' => 'required|integer|min:0|max:10',
        'q15' => 'required|integer|min:0|max:10',
        'q16' => 'required|integer|min:0|max:10',
        'q17' => 'required|integer|min:0|max:10',
        'q18' => 'required|integer|min:0|max:10',
        'q19' => 'required|integer|min:0|max:10',
        'q20' => 'required|integer|min:0|max:10',
        'q21' => 'required|integer|min:0|max:10',
        'q22' => 'required|integer|min:0|max:10',
        'q23' => 'required|integer|min:0|max:10',
        'q24' => 'required|integer|min:0|max:10',
        'q25' => 'required|integer|min:0|max:10',
        'q26' => 'required|integer|min:0|max:10',
        'q27' => 'required|integer|min:0|max:10',
        'q28' => 'required|integer|min:0|max:10',
        'q29' => 'required|integer|min:0|max:10',
        'q30' => 'required|integer|min:0|max:10',
        'q31' => 'required|integer|min:0|max:10',
        'q32' => 'required|integer|min:0|max:10',
        'q33' => 'required|integer|min:0|max:10',
        'q34' => 'required|integer|min:0|max:10',
        'q35' => 'required|integer|min:0|max:10',
        'q36' => 'required|integer|min:0|max:10',
        'q37' => 'required|integer|min:0|max:10',
        'q38' => 'required|integer|min:0|max:10',
        'q39' => 'required|integer|min:0|max:10',
        'q40' => 'required|integer|min:0|max:10',
        'q41' => 'required|integer|min:0|max:10',
        'q42' => 'required|integer|min:0|max:10',
        'q43' => 'required|integer|min:0|max:10',
        'q44' => 'required|integer|min:0|max:10',
        'q45' => 'required|integer|min:0|max:10',
        'q46' => 'required|integer|min:0|max:10',
        'q47' => 'required|integer|min:0|max:10',
        'q48' => 'required|integer|min:0|max:10',
        'q49' => 'required|integer|min:0|max:10',
        'q50' => 'required|integer|min:0|max:10',
        'q51' => 'required|integer|min:0|max:10',
        'q52' => 'required|integer|min:0|max:10',
        'q53' => 'required|integer|min:0|max:10',
        'q54' => 'required|integer|min:0|max:10',
    ]);

    Penilaian::updateOrCreate(
        [
            'responden_id' => $responden_id,
            'kategori' => 'pengelolaan-aset',
        ],
        [
            'jawaban' => json_encode($validatedData),
        ]
    );

    \Log::info("Pengelolaan Aset berhasil disimpan untuk responden_id: {$responden_id}");

    return redirect()->route('teknologi', ['responden_id' => $responden_id]);
    }

    public function storeTeknologi(Request $request, $responden_id)
    {
    $validatedData = $request->validate([
        'q1' => 'required|integer|min:0|max:10',
        'q2' => 'required|integer|min:0|max:10',
        'q3' => 'required|integer|min:0|max:10',
        'q4' => 'required|integer|min:0|max:10',
        'q5' => 'required|integer|min:0|max:10',
        'q6' => 'required|integer|min:0|max:10',
        'q7' => 'required|integer|min:0|max:10',
        'q8' => 'required|integer|min:0|max:10',
        'q9' => 'required|integer|min:0|max:10',
        'q10' => 'required|integer|min:0|max:10',
        'q11' => 'required|integer|min:0|max:10',
        'q12' => 'required|integer|min:0|max:10',
        'q13' => 'required|integer|min:0|max:10',
        'q14' => 'required|integer|min:0|max:10',
        'q15' => 'required|integer|min:0|max:10',
        'q16' => 'required|integer|min:0|max:10',
        'q17' => 'required|integer|min:0|max:10',
        'q18' => 'required|integer|min:0|max:10',
        'q19' => 'required|integer|min:0|max:10',
        'q20' => 'required|integer|min:0|max:10',
        'q21' => 'required|integer|min:0|max:10',
        'q22' => 'required|integer|min:0|max:10',
        'q23' => 'required|integer|min:0|max:10',
        'q24' => 'required|integer|min:0|max:10',
        'q25' => 'required|integer|min:0|max:10',
        'q26' => 'required|integer|min:0|max:10',
        'q27' => 'required|integer|min:0|max:10',
        'q28' => 'required|integer|min:0|max:10',
        'q29' => 'required|integer|min:0|max:10',
        'q30' => 'required|integer|min:0|max:10',
        'q31' => 'required|integer|min:0|max:10',
        'q32' => 'required|integer|min:0|max:10',
        'q33' => 'required|integer|min:0|max:10',
        'q34' => 'required|integer|min:0|max:10',
        'q35' => 'required|integer|min:0|max:10',
    ]);

    Penilaian::updateOrCreate(
        [
            'responden_id' => $responden_id,
            'kategori' => 'teknologi',
        ],
        [
            'jawaban' => json_encode($validatedData),
        ]
    );

    \Log::info("Teknologi berhasil disimpan untuk responden_id: {$responden_id}");

    return redirect()->route('pdp', ['responden_id' => $responden_id]);
    }

    public function storePDP(Request $request, $responden_id)
    {
        $validatedData = $request->validate([
            'q1' => 'required|integer|min:0|max:10',
            'q2' => 'required|integer|min:0|max:10',
            'q3' => 'required|integer|min:0|max:10',
            'q4' => 'required|integer|min:0|max:10',
            'q5' => 'required|integer|min:0|max:10',
            'q6' => 'required|integer|min:0|max:10',
            'q7' => 'required|integer|min:0|max:10',
            'q8' => 'required|integer|min:0|max:10',
            'q9' => 'required|integer|min:0|max:10',
            'q10' => 'required|integer|min:0|max:10',
            'q11' => 'required|integer|min:0|max:10',
            'q12' => 'required|integer|min:0|max:10',
            'q13' => 'required|integer|min:0|max:10',
            'q14' => 'required|integer|min:0|max:10',
            'q15' => 'required|integer|min:0|max:10',
            'q16' => 'required|integer|min:0|max:10',
        ]);

        Penilaian::updateOrCreate(
            [
                'responden_id' => $responden_id,
                'kategori' => 'perlindungan-data-pribadi',
            ],
            [
                'jawaban' => json_encode($validatedData),
            ]
        );

        \Log::info("Perlindungan Data Pribadi berhasil disimpan untuk responden_id: {$responden_id}");

        return redirect()->route('suplemen', ['responden_id' => $responden_id]);
    }

    public function storeSuplemen(Request $request, $responden_id)
    {
    $validatedData = $request->validate([
        'q1' => 'required|integer|min:0|max:10',
        'q2' => 'required|integer|min:0|max:10',
        'q3' => 'required|integer|min:0|max:10',
        'q4' => 'required|integer|min:0|max:10',
        'q5' => 'required|integer|min:0|max:10',
        'q6' => 'required|integer|min:0|max:10',
        'q7' => 'required|integer|min:0|max:10',
        'q8' => 'required|integer|min:0|max:10',
        'q9' => 'required|integer|min:0|max:10',
        'q10' => 'required|integer|min:0|max:10',
        'q11' => 'required|integer|min:0|max:10',
        'q12' => 'required|integer|min:0|max:10',
        'q13' => 'required|integer|min:0|max:10',
        'q14' => 'required|integer|min:0|max:10',
        'q15' => 'required|integer|min:0|max:10',
        'q16' => 'required|integer|min:0|max:10',
        'q17' => 'required|integer|min:0|max:10',
        'q18' => 'required|integer|min:0|max:10',
        'q19' => 'required|integer|min:0|max:10',
        'q20' => 'required|integer|min:0|max:10',
        'q21' => 'required|integer|min:0|max:10',
        'q22' => 'required|integer|min:0|max:10',
        'q23' => 'required|integer|min:0|max:10',
        'q24' => 'required|integer|min:0|max:10',
        'q25' => 'required|integer|min:0|max:10',
        'q26' => 'required|integer|min:0|max:10',
        'q27' => 'required|integer|min:0|max:10',
    ]);

    Penilaian::updateOrCreate(
        [
            'responden_id' => $responden_id,
            'kategori' => 'suplemen',
        ],
        [
            'jawaban' => json_encode($validatedData),
        ]
    );

    \Log::info("Suplemen berhasil disimpan untuk responden_id: {$responden_id}");

    return redirect()->route('dashboard', ['responden_id' => $responden_id]);
    }

    public function dashboard($responden_id)
{
    // Daftar kategori penilaian
    $categories = [
        'sistem-elektronik',
        'tata-kelola',
        'pengelolaan-resiko',
        'kerangka-kerja',
        'pengelolaan-aset',
        'teknologi',
        'perlindungan-data-pribadi',
        'suplemen',
    ];

    // Menyimpan hasil perhitungan setiap kategori
    $results = [];
    $totalScore = 0;
    $sistemElektronikScore = 0;

    foreach ($categories as $category) {
        $penilaian = Penilaian::where('responden_id', $responden_id)
            ->where('kategori', $category)
            ->first();

        if ($penilaian) {
            $answers = json_decode($penilaian->jawaban, true);
            $score = array_sum($answers);

            // Tambahkan ke totalScore kecuali kategori suplemen
            if ($category !== 'suplemen' && $category !== 'sistem-elektronik') {
                $totalScore += $score;
            }

            if ($category === 'sistem-elektronik') {
                $sistemElektronikScore = $score;
            }

            $results[$category] = [
                'score' => $score,
                'evaluation' => $this->getEvaluation($score),
                'maturity' => $this->getMaturityLevel($score),
            ];
        } else {
            $results[$category] = [
                'score' => null,
                'evaluation' => 'Belum diisi',
                'maturity' => 'Belum diisi',
            ];
        }
    }

    // Hitung tingkat kematangan berdasarkan totalScore
    $maturityLevel = $this->getEvaluation($totalScore);

    // Hitung kategori sistem elektronik (SE)
    $kategoriSE = $this->getKategoriSE($sistemElektronikScore);

    return view('dashboard', [
        'responden_id' => $responden_id,
        'results' => $results,
        'totalScore' => $totalScore,
        'maturityLevel' => $maturityLevel,
        'kategoriSE' => $kategoriSE,
        'sistemElektronikScore' => $sistemElektronikScore,
    ]);
}


    // Fungsi untuk menentukan evaluasi kategori
    private function getEvaluation($score)
    {
        if ($score > 864) {
            return 'Baik';
        } elseif ($score >= 761 && $score <= 864) {
            return 'Cukup Baik';
        } elseif ($score >= 473 && $score <= 760) {
            return 'Pemenuhan Kerangka Kerja Dasar';
        } elseif ($score >= 0 && $score <= 472) {
            return 'Tidak Layak';
        } else {
            return 'Nilai tidak valid';
        }
    }



    // Fungsi untuk menentukan tingkat kematangan
    private function getMaturityLevel($score)
    {
        if ($score >= 150) {
            return 'Tingkat V';
        } elseif ($score >= 100) {
            return 'Tingkat III';
        } else {
            return 'Tingkat II';
        }
    }

    // Fungsi untuk menentukan kategori SE
    private function getKategoriSE($score)
    {
        if ($score >= 35 && $score <= 50) {
            return 'Strategis';
        } elseif ($score >= 16 && $score <= 34) {
            return 'Tinggi';
        } elseif ($score >= 10 && $score <= 15) {
            return 'Rendah';
        } else {
            return 'Belum Tersedia';
        }
    }





}


