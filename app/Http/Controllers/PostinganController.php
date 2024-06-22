<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostinganRequest;
use App\Http\Requests\UpdatePostinganRequest;
use App\Services\KategoriService;
use App\Services\PostinganService;
use Illuminate\Http\Request;

class PostinganController extends Controller
{
  protected $postinganService;
  protected $kategoriService;

  public function __construct()
  {
    $this->postinganService = new PostinganService();
    $this->kategoriService = new KategoriService();
  }

  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    try {
      return view('admin.postingan.index', [
        'title' => 'Postingan - Admin Goa Petapa',
        'postingan' => $this->postinganService->getPostinganAll(),
      ]);
    } catch (\Exception $e) {
      //   abort(500);
      throw $e;
    }
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    try {
      return view('admin.postingan.create', [
        'title' => 'Tambah Postingan - Admin Goa Petapa',
        'kategori' => $this->kategoriService->getKategoriAll()
      ]);
    } catch (\Exception $e) {
      // throw $e;
      abort(500);
    }
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(StorePostinganRequest $request)
  {
    try {
      $validatedData = $request->validated();

      if ($request->hasFile('thumbnail')) {
        $validatedData['thumbnail'] = $request->file('thumbnail');
      }

      $this->postinganService->createPostingan($validatedData);

      return redirect()->route('postingan.index')->with('success', 'Data Postingan berhasil ditambahkan!');
    } catch (\Exception $e) {
      // throw $e;
      return redirect()->route('postingan.index')->with('error', 'Data Postingan gagal ditambahkan!');
    }
  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(string $id)
  {
    try {
      return view('admin.postingan.edit', [
        'title' => 'Edit Postingan - Admin Goa Petapa',
        'postingan' => $this->postinganService->getPostinganByUuid($id),
        'kategori' => $this->kategoriService->getKategoriAll()
      ]);
    } catch (\Exception $e) {
      throw $e;
      abort(500);
    }
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(UpdatePostinganRequest $request, string $id)
  {
    try {
      $this->postinganService->updatePostingan($request->all(), $id);

      return redirect()->route('postingan.index')->with('success', 'Data Postingan berhasil diperbarui!');
    } catch (\Exception $e) {
      // throw $e;
      return redirect()->route('postingan.index')->with('error', 'Data Postingan gagal diperbarui!');
    }
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    try {
      $this->postinganService->deletePostingan($id);

      return redirect()->route('postingan.index')->with('success', 'Data Postingan berhasil dihapus!');
    } catch (\Exception $e) {
      // throw $e;
      return redirect()->route('postingan.index')->with('error', 'Data Postingan gagal dihapus!');
    }
  }
}
