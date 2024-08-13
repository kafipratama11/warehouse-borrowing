@extends('layouts.app')
@section('main')
<div class="d-flex main-container">
      @include('partials.sidebar')
      <div class="w-100">
            @include('partials.header')
            <div class="px-4 d-flex mt-3">
                  <div class="me-auto fw-medium">Production Tracking</div>
                  <button type="button" class="btn background-primary text-white btn-add"><i class="bi bi-plus-lg"></i> Add Product</button>
            </div>
            <div class="px-4 mt-3">
                  <div class="bg-white px-3 py-4 rounded border">
                        <div class="fw-medium mb-2">Inventory Items</div>
                        <div class="d-flex">
                              <div class="me-auto">
                                    <div class="input-group search-products">
                                          <span class="input-group-text bg-white border-end-0" id="basic-addon1"><i class="bi bi-search"></i></span>
                                          <input type="text" class="form-control border-start-0" placeholder="Search" aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                              </div>
                              <div class="d-flex gap-2">
                                    <div>
                                          <a href="" class="link-underline link-underline-opacity-0">
                                                <div class="border px-2 py-1 btn-table"><i class="bi bi-funnel"></i> Filter</div>
                                          </a>
                                    </div>
                                    <div>
                                          <a href="" class="link-underline link-underline-opacity-0">
                                                <div class="border px-2 py-1 btn-table d-flex align-items-center gap-1">
                                                      <i class="bi bi-calendar4-week"></i>
                                                      <div>Date</div>
                                                </div>
                                          </a>
                                    </div>
                                    <div>
                                          <a href="" class="link-underline link-underline-opacity-0">
                                                <div class="px-2 py-1 btn-table d-flex align-items-center gap-1 background-primary text-white fw-light">
                                                      <i class="bi bi-download"></i>
                                                      <div>Export</div>
                                                </div>
                                          </a>
                                    </div>
                              </div>
                        </div>
                  </div>
                  <table class="table table-hover" style="font-size: 12px">
                        <thead class="table-light">
                              <tr>
                                    <th scope="col">
                                          <div class="form-check form-check-inline d-flex w-100 h-100 align items-center">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height: 15px; width: 15px;">
                                          </div>
                                    </th>
                                    <th scope="col">Product Code</th>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Action</th>
                              </tr>
                        </thead>
                        <tbody>
                              @foreach ($items as $item)
                              <tr>
                                    <th scope="row">
                                          <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                      {{ $loop->iteration }}
                                                </label>
                                          </div>
                                    </th>
                                    <td>{{ $item->item_code }}</td>
                                    <td>{{ $item->item_name }}</td>
                                    <td>SMARTPHONE</td>
                                    <td>
                                          <a href="" class="link-underline link-underline-opacity-0 link-secondary">
                                                <i class="bi bi-three-dots" style="font-size: 20px"></i>
                                          </a>
                                    </td>
                              </tr>
                              @endforeach
                        </tbody>
                  </table>
            </div>
      </div>
</div>
@endsection
