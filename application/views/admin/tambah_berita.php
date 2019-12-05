        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Tambah Berita</h1>
            </div>
            <form action="" enctype="multipart/form-data" method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Judul Berita</label>
                    <input type="text" class="form-control" name="judul">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Isi Berita</label>
                    <textarea type="text" class="form-control" rows="5" id="isi" name="isi"></textarea>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="exampleInputEmail1">Pilih Gambar</label>
                        <input type="file" class="form-control-file" name="gambar" id="gambar" accept="image/*"  onchange="tampilkanPreview(this,'preview')">
                    </div>
                    <div class="col-md-6">
                         <img id="preview" class=" mx-auto d-block">
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" id="publis" type="submit" disabled>Publish</button>
                </div>
            </form>
            <!-- Content Row -->

        </div>
        <!-- /.container-fluid -->

        <script>
            let publis = document.getElementById('publis');
            let gambar = document.getElementById('gambar');
            let isi = document.getElementById('isi');

            gambar.addEventListener('change',function(){
                if (gambar.value != '') {
                    publis.removeAttribute('disabled');
                    console.log('cange');
                }else{
                    publis.addAttribute('disabled');

                }
                
            })

            function tampilkanPreview(gambar,idpreview){
            //                membuat objek gambar
                var gb = gambar.files;
                
            //                loop untuk merender gambar
                for (var i = 0; i < gb.length; i++){
            //                    bikin variabel
                    var gbPreview = gb[i];
                    var imageType = /image.*/;
                    var preview=document.getElementById(idpreview);            
                    var reader = new FileReader();
                    
                    if (gbPreview.type.match(imageType)) {
            //                        jika tipe data sesuai
                        preview.file = gbPreview;
                        reader.onload = (function(element) {
                            return function(e) {
                                element.src = e.target.result;
                            };
                        })(preview);

                    $('.img-preview').css('display','block');
            //                    membaca data URL gambar
                        reader.readAsDataURL(gbPreview);
                        preview.style.width = '100%';
                        preview.style.height = '300px';

                    }else{
            //                        jika tipe data tidak sesuai
                        alert("Type file tidak sesuai. Khusus image.");
                    }
                   
                }    
            }


        </script>