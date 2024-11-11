<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/font/material-design-icons/Material-Design-Icons.woff'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">

    <style>
        body {
            font-family: "Arial", sans-serif;
        }

        main {
            flex: 1;
            padding-left: 240px;
        }

        .card-content {
            font-family: "Roboto", sans-serif;
        }

        .card-header {
            background-color: #edada3;
        }

        .input.is-link {
            border-color: #fdb0c0;
        }

        .textarea.is-link {
            border-color: #fdb0c0;
        }

        .select.is-info select {
            border-color: #fdb0c0;
        }
    </style>

</head>

<body>
    @include('admin.side.navigation')
    @include('admin.side.header')
    <main>
        @include('admin.side.floating')
        <section class="section">
            <div class="container">
            <form id="productForm" action="{{ url('products/'.$product->id) }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    @method('PUT')

                    <div class="card">
                        <header class="card-header">
                            <p class="card-header-title">Edit Product</p>
                        </header>

                        <div class="card-content">
                            <div class="field">
                                <label class="label">Code</label>
                                <div class="control">
                                    <input name="code" type="number" class="input is-link" placeholder="Masukkan Code Disini.." value="{{ $product->code }}" />
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Name</label>
                                <div class="control">
                                    <input name="name" type="text" class="input is-link" placeholder="Masukkan Nama Disini.." value="{{ $product->name }}" />
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Description</label>
                                <div class="control">
                                    <textarea name="description" class="textarea is-link" placeholder="Masukkan Deskripsi Disini..">{{ $product->description }}</textarea>
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Selling Price</label>
                                <div class="control">
                                    <input name="selling_price" type="number" class="input is-link" placeholder="Rp." value="{{ $product->selling_price }}" />
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Stock</label>
                                <div class="control">
                                    <input name="stock" type="number" class="input is-link" placeholder="Inputkan Stock Disini.." value="{{ $product->stock }}" />
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Image</label>
                                <div class="control">
                                    <input name="image" type="file" class="input is-link" />
                                    @if($product->image)
                                    <img src="{{ asset('storage/' . $product->image) }}" alt="Product Image" width="100" />
                                    @endif
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Show Status</label>
                                <div class="control">
                                    <div class="select is-info">
                                        <select name="show_status">
                                            <option value="1" @if($product->show_status == 1) selected @endif>Show</option>
                                            <option value="0" @if($product->show_status != 1) selected @endif>Hide</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">BPOM Status</label>
                                <div class="control">
                                    <div class="select is-info">
                                        <select name="bpom_status">
                                            <option value="1" @if($product->bpom_status == 1) selected @endif>Approved</option>
                                            <option value="0" @if($product->bpom_status != 1) selected @endif>Pending</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Halal Status</label>
                                <div class="control">
                                    <div class="select is-info">
                                        <select name="halal_status">
                                            <option value="1" @if($product->halal_status == 1) selected @endif>Halal</option>
                                            <option value="0" @if($product->halal_status != 1) selected @endif>Not Halal</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="field is-grouped">
                                <div class="control">
                                    <button type="submit" class="button is-danger">Save</button>
                                </div>
                                <div class="control">
                                    <a href="{{ url('products') }}" class="button is-link">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </main>
    @include('admin.side.footer')
</body>

</html>