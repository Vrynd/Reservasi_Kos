<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:wght@200;300;400;500;600;700&display=swap"
        rel="stylesheet">
    <title>Tambah Kos</title>
</head>
<style>
    body {
        padding: 20px 3% 0 3%;
        margin: 0;
        box-sizing: border-box;
        font-family: "Montserrat", serif;
    }

    form {
        display: flex;
        flex-direction: column;
        position: relative;
        padding: 30px;
        border-radius: .8rem;
        background-color: white;
        box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.089);
        transition: margin-top 0.3s ease-in-out;
    }

    form .row {
        display: flex;
        flex-direction: row column;
        flex-wrap: wrap;
        justify-content: start;
        gap: 2rem;
        align-items: start;
        width: 100%;
        height: 100%;
    }

    form .row .left-from {
        flex: 1;
        height: auto;
    }

    form .row .right-form {
        flex: 1;
        height: auto;
    }

    form .row .flex-column {
        display: block;
        color: black;
        font-weight: 500;
        font-size: 1.1rem;
        cursor: pointer;
    }

    form .row .inputForm {
        display: block;
        width: 100%;
        height: auto;
        position: relative;
        margin-top: .5rem;
        display: block;
        height: 45px;
        width: 100%;
        position: relative;
        margin-bottom: 1.1rem;
    }

    form .row .inputForm input {
        position: absolute;
        height: 100%;
        width: 87%;
        border: 2px solid rgb(4, 99, 202, 0.5);
        border-radius: .5rem;
        padding: 0 2.4rem;
        font-size: 1.1rem;
        font-weight: 500;
        color: var(--text-black);
        transition: all .3s ease-in-out;

    }

    form .row .inputForm input[type="file"] {
        appearance: none;
        -webkit-appearance: none;
        /* Safari & Chrome */
        -moz-appearance: none;
    }

    form .row .inputForm i {
        position: absolute;
        top: 50%;
        padding: 0 .5rem;
        transform: translateY(-50%);
        font-size: 1.3rem;
        font-weight: 400;
        color: rgb(4, 99, 202, 0.5);
        transition: all .3s ease-in-out;

    }

    form .row .inputForm img {
        right: 0;
        cursor: pointer;

    }

    form .button-add {
        display: flex;
        flex-direction: row;
        justify-content: start;
        gap: .5rem;
        width: 100%;
        margin-top: .5rem;

    }

    form .button-add>a {
        display: block;
        padding: .4rem 1rem;
        background-color: #e2e6ea;
        color: #495057;
        border-radius: .4rem;
        font-size: 1.2rem;
        font-weight: 600;
        transition: all .3s ease;
        cursor: pointer;
        touch-action: manipulation;
        box-shadow: 0px 5px 0px 0px #E5EDFF;
        text-decoration: none;

    }

    form .button-add>button {
        display: block;
        padding: .4rem 2rem;
        background-color: blue;
        border: none;
        color: white;
        border-radius: .4rem;
        font-size: 1.2rem;
        font-weight: 600;
        cursor: pointer;
        transition: all .3s ease;
        touch-action: manipulation;
        box-shadow: 0px 5px 0px 0px #E5EDFF;

    }
</style>

<body>
    <form action="{{ route('admin.dataSemuaKos.update', $ko->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="left-from">
                <div class="flex-column">
                    <label for="foto">Foto Kos</label>
                </div>
                <div class="inputForm">
                    <input type="file" id="foto" name="foto" required>
                    <i class='bx bx-image-add'></i>
                    <img src="{{ asset('storage/' . $ko->foto) }}" alt="Foto Kos" width="50" >
                </div>
                <div class="flex-column">
                    <label for="nama">Nama Kos</label>
                </div>
                <div class="inputForm">
                    <input type="text" value="{{ $ko->nama }}" name="nama" id="nama" required>
                    <i class='bx bx-home'></i>
                </div>
            </div>
            <div class="right-form">
                <div class="flex-column">
                    <label for="lokasi">Lokasi Kos</label>
                </div>
                <div class="inputForm">
                    <input type="text" value="{{ $ko->lokasi }}" name="lokasi" required>
                    <i class='bx bx-map'></i>
                </div>
                <div class="flex-column">
                    <label for="harga">Harga Kos</label>
                </div>
                <div class="inputForm">
                    <input type="number" value="{{ $ko->harga }}" name="harga" step="0.01" required>
                    <i class='bx bx-wallet'></i>
                </div>
            </div>
        </div>
        <div class="button-add">
            <a href="{{ route('admin.dataSemuaKos.index') }}" id="cancelButton">Kembali</a>
            <button type="submit" name="update" value="update">Update</button>
        </div>
    </form>
</body>

</html>
