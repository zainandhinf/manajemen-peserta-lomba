<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>

    {{-- Bootstrap --}}
    <link rel="stylesheet" href="{{ asset('assets/bootstrap') }}/css/bootstrap.min.css">
    {{-- End Bootstrap --}}

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="{{ asset('assets/fontawesome') }}/css/all.min.css">
    {{-- End Font Awesome --}}

    {{-- DataTables --}}
    <link rel="stylesheet" href="assets/DataTables/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js">
    <link rel="stylesheet" href="../assets/DataTables/dataTables.bootstrap5.min.css">
    <script src="assets/DataTables/jquery.dataTables.min.js"></script>
    <script src="../assets/DataTables/jquery.dataTables.min.js"></script>
    <script src="assets/DataTables/dataTables.bootstrap5.min.js"></script>
    <script src="../assets/DataTables/dataTables.bootstrap5.min.js"></script>
    {{-- <link href="assets/DataTables/DataTables-1.13.6/css/jquery.dataTables.css" rel="stylesheet">
    <link href="../assets/DataTables/DataTables-1.13.6/css/jquery.dataTables.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" /> --}}
    {{-- end DataTables --}}

    {{-- Style --}}
    <link rel="stylesheet" href="{{ asset('assets/css') }}/admin.css">
    {{-- end Style --}}


</head>

<body class="bg-light d-flex overflow-hidden"
    style="font-family: Poppins, 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">

    <div class="main w-100 active position-relative">

        @include('../components/sidebar')

        <main class="w-100 overflow-y-scroll" style="height: 100vh">

            {{-- @include('components/navbar') --}}

            <div class="modal fade" id="logout" tabindex="-1" aria-hidden="true">
                <form action="" method="POST" class="modal-dialog modal-dialog-centered">
                    @csrf
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-16px" id="exampleModalLabel">Konfirmasi Logout</h1>
                        </div>
                        <div class="modal-body">
                            <p class="mb-0 fs-15px">Apakah anda yain ingin logout?</p>
                        </div>
                        <div class="modal-footer">
                            <div class="d-flex gap-1 justify-content-end">
                                <button type="button" class="fw-semibold btn btn-sm btn-secondary"
                                    data-bs-dismiss="modal">Batal</button>
                                <button type="submit" class="fw-semibold btn btn-sm btn-danger"><i
                                        class="fa-regular fa-right-from-bracket"></i> Ya Keluar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            @yield('content')
        </main>
    </div>

    {{-- Bootstrap --}}
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    {{-- end Bootstrap --}}

    {{-- DataTables --}}
    <script src="assets/DataTables/jquery.dataTables.min.js"></script>
    <script src="../assets/DataTables/jquery.dataTables.min.js"></script>
    <script src="assets/DataTables/dataTables.bootstrap5.min.js"></script>
    <script src="../assets/DataTables/dataTables.bootstrap5.min.js"></script>
    {{-- <script src="assets/DataTables/DataTables-1.13.6/js/jquery.dataTables.js"></script>
    <script src="../assets/DataTables/DataTables-1.13.6/js/jquery.dataTables.js"></script> --}}
    {{-- end DataTables --}}

    {{-- Js --}}

    {{-- end Js --}}

    <script>
        function toggleDataDropdown() {
            // console.log("berhasil");
            var dataDropdown = document.getElementById('dataDropdown');
            var dataDropdown2 = document.getElementById('dataDropdown2');

            // Toggle display dari <ul> ketika tautan diklik
            if (dataDropdown.style.display === 'block') {
                dataDropdown.style.display = 'none';
            } else {
                dataDropdown.style.display = 'block';
                dataDropdown2.style.display = 'none';
            }
        }

        function toggleDataDropdown2() {
            // console.log("berhasil");
            var dataDropdown = document.getElementById('dataDropdown2');
            var dataDropdown2 = document.getElementById('dataDropdown');

            // Toggle display dari <ul> ketika tautan diklik
            if (dataDropdown.style.display === 'block') {
                dataDropdown.style.display = 'none';
            } else {
                dataDropdown.style.display = 'block';
                dataDropdown2.style.display = 'none';
            }
        }
    </script>

</body>

</html>
