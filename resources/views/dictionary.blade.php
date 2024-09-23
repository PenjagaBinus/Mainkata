<x-app-layout>


<style>

#selek{
      margin-top: 10px;
    /* height: 0px; */
    padding-bottom: 0px;
    padding-top: 0px;
    /* box-sizing: border-box; */
    /* width: 527.984; */
    /* width: 447.984; */
    /* width: 487.984; */
    }

    #translateButton{
        margin-top: 10px;
        width: 800px;
    }

    #hasilterjemahan{
      margin-top: 10px;
    }

#tokenisasi{
        margin-top: 20px;
        width: 800px;
    }

    #pdf-form-button{
    width: 800px;
}

    .progress{
        margin: 10px;
    }

    .popup{
        position: fixed;
        top: 50%;
        left: 50%;        
        background-color: #f8f9fa;
        border: 1px solid #dee2e6;
        padding: 20px;
        z-index: 1000;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        border-radius: 5px;
        text-align: center;
        width: 300px;
    }
</style>
<main>
<div class="container-xxl">
                <div class="row justify-content-md-center">
                    <div class="col-8">
                    <div class="card p-3 py-4">
                        <div class="text-center" style="margin: auto;">
                        <x-profpic width="100" class="rounded-circle"/>
                        </div>
                        <div class="text-center mt-3">
                        <span class="bg-secondary p-1 px-4 rounded text-white">{{Auth::user()->name}}</span>
                        <div class="row text-center">
                            <div class="col-md-3"></div>
                            <div class="progress col-md-6" role="progressbar" aria-label="Basic example" >
                            <div class="progress-bar" style="width: {{$progress}}%"></div>
                            </div>
                        </div>
                        <div class="col-md-3"></div>
                        <span id="level-text">Level {{$level}} : {{$points}} / {{$max_point}}</span>
                    </div>
                    </div>
                        
                    <div class="card">
                            <div class="card-header">
                                Upload PDF
                            </div>
                            <form method="" action="" id="pdf-form" class="mb-3">
                                <div class="card-body">
                                    <div class="input-group mb-3">
                                        <input title="tombol" type="file" class="form-control" id="berkasmasuk" accept=".pdf">
                                    </div>
                                    <div class="tombol">
                                <button type="submit" class="btn btn-primary" id="pdf-form-button">Transfer Text</button>
                                </div>
                            </form>
                            <textarea id="areateks2" placeholder="Hasil anda" class="form-control" style="height: 100px;"></textarea>
                                </div>

                    </div>

                    <div class="card">
                      <div class="card-header">
                        Translation Indonesian/English
                      </div>
                      <div class="card-body">
                        <div class="form-floating">
                          <textarea  id="inputText" placeholder="Write your english text here" class="form-control" style="height: 100px;"></textarea>
                          <label for="inputText">Input Text</label>
                          
                          <select class="form-select form-select-lg" id="selek" aria-label="Small select example">
                            <option value="en">Translate to Bahasa Indonesia</option>
                            <option value="id">Translate to English</option>
                          </select>
                          <div class="tombol">
                              <button class="btn btn-primary" type="button"  id="translateButton" >Terjemahkan</button>
                            </div> 
                          <div class="form-floating">
                            <textarea  id="hasilterjemahan" placeholder="tulislah teks anda di sini" class="form-control" style="height: 100px;" disabled></textarea>
                            <label for="hasilterjemahan">Results</label>
                    </div>
                      </div>
                      </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            Text Search
                        </div>
                        <div class="card-body">
                            <div class="form-floating">
                                <textarea id="areateks" placeholder="tulislah teks anda di sini" class="form-control" style="height: 100px;"></textarea>
                                <label for="areateks">Text Area</label>
                                <form action="" method="POST">
                                <div class="tombol">
                                    <button class="btn btn-secondary" type="button" id="tokenisasi">
                                        Tokenize
                                    </button>                                    
                                </div>          
                                </form>
                            </div>
                            <div class="form-floating">
                                    <textarea id="areateksdisabled" placeholder="tulislah teks anda di sini" class="form-control" style="height: 100px;" disabled></textarea>
                                    <label for="areateksdisabled" >Search Results</label>
                            </div>
                        </div>
                    </div>
                    </div>

                </div>
        
</main>
<script src="https://cdn.jsdelivr.net/npm/pdfjs-dist/build/pdf.min.js"></script>
<script>
            document.addEventListener("DOMContentLoaded", function(){
            let poppovers = document.querySelectorAll('#popoverButton');
            // console.log(poppovers);
            poppovers.forEach(element => {
                // console.log(element);
                new bootstrap.Popover(element);
            });

            function UserLevel(){
                fetch("{{route('user.level')}}")
                    .then(response => response.json())
                        .then(data => {
                                    document.querySelector('.progress-bar').style.width = `${data.progress}%`;
                                    document.querySelector('#level-text').innerText = `Level ${data.level} : ${data.points} / ${data.max_point}`;
                                    });
                                }

            UserLevel();

            setInterval(UserLevel, 1000);
        });
        // PDF
        const form = document.getElementById('pdf-form');
        const extext = document.getElementById('areateks2');
        const button = document.getElementById('pdf-form-button');
        const selector = document.getElementById('selection');
        pdfjsLib.GlobalWorkerOptions.workerSrc = "https://cdn.jsdelivr.net/npm/pdfjs-dist@3.11.174/build/pdf.worker.min.js";
// console.log(button);

button.addEventListener('click', async(event) => {
    // console.log(selector.value);
    event.preventDefault();
    // console.log(selector.value);
    let manhala = parseInt(selector.value);
    console.log(typeof manhala);
    const file = document.getElementById('berkasmasuk').files[0];
    console.log(file);
    if(file.name.includes('.pdf')){
        let fr = new FileReader();
    fr.readAsDataURL(file);
    fr.onload = () =>{
        let res = fr.result;
        let promhasil = ektraksiTeks(res);
        promhasil.then(result => {
            hasil = result;
            // console.log(typeof hasil);
            extext.textContent = hasil;
            addpoints();
        });
        // console.log(hasil);
    }
    
    // console.log(hasil);
    
    async function ektraksiTeks(url) {
        let pdf = await pdfjsLib.getDocument(url).promise;
        // console.log(pdf);
        let pages = pdf._pdfInfo.numPages;
        console.log(pages);
        let halaman = await pdf.getPage(manhala);
        let teks = await halaman.getTextContent();
        // console.log(halaman);
        // console.log(teks.items);
        let txt = teks.items.map((s) => s.str).join(" ");
        // console.log(txt);
        return txt;
    }
    }else{ 
        alert('Error: Berkas harus PDF');
    }
});


        const textbox = document.getElementById('inputText');
        const result = document.getElementById('hasilterjemahan');
        const selection = document.getElementById('selek');
        const translation = document.getElementById('translateButton');
        
        //Terjemahan
        translation.addEventListener('click', function(){
            let selectedoption = selection.options[selection.selectedIndex];
            const language = selectedoption.value;
            const userquestion = textbox.value;

            let tambahan = '';
            if(language === 'en'){
                tambahan = "Translate to Indonesian (display without special charachters and only display the answer, no '\n' and no '*'):";
            }else{
                tambahan = "Terjemahkan ke Inggris (display without special charachters and only display the answer, no '\n' and no '*'):"; 
            }
            const question1 = tambahan + userquestion;
            const langcode = language;
            const apiUrl = 'https://predict.cogniflow.ai/text/question-answering/ask/f0c66b94-d947-487a-82d7-4cddbed30e9c'; 
            const apikey = '0db17499-2cf1-4621-9a3e-f05d8595a659';
            const body = {
                question: question1,
                lang_code:langcode,
            } 
            
            fetch(apiUrl, {
                method:'POST',
                headers: {
                    'accept': 'application/json',
                    'Content-Type': 'application/json',
                    'x-api-key':apikey,
                },
                body: JSON.stringify(body)
            }).then(result => result.json())
            .then(data => {
                // console.log(data);
                const answer = data.result[0].answer;
                result.textContent = answer; 
                addpoints();
            }).catch(error => {
                alert(error.message);
            })
        });

        const textarea = document.getElementById('areateks');
        const tokenisasiButton = document.getElementById('tokenisasi');
        const resultDiv = document.getElementById('areateksdisabled');
        let hoverbool = 1;

        function Hovering(event){
            const textarea = event.target;
            const cursorX = event.clientX;
            const cursorY = event.clientY;

            const rect = textarea.getBoundingClientRect();
            const X = cursorX - rect.left;
            const Y = cursorY - rect.top;

            const avgchar = 5;
            const charIndex = Math.floor(X / avgchar);

            let start = charIndex;
            while(start > 0 && textarea.value[start-1] !== ' ')
            {
                start--;
            }

            let end = charIndex;
            while(end < textarea.value.length && textarea.value[end] !== ' ')
            {
                end++;
            }

            const hoverword = textarea.value.substring(start,end);
            return hoverword.trim();
        }

        // Pencarian - Hover
        textarea.addEventListener('mouseenter', function(event){
            const kata = Hovering(event);
            console.log(kata);
            if(kata.length > 0){
                const katamasuk =encodeURIComponent(kata);
                fetch(`http://localhost:3000/tokenisasi?sentence=${katamasuk}`, {
                method: 'GET'
            }).then(result => result.json())
            .then(data => {
                const words = new Set();
                Object.entries(data).forEach((a,b) => {
                let word = `${a[1].kata}: ${a[1].arti}`;
                words.add(word);
                });
                let hasil = '';
                
                words.forEach(entry => {
                    let stopindex = 50;
                    if(stopindex > 0){
                        hasil = hasil + entry.slice(0,stopindex) + '\n\n';
                    }else{
                        hasil = hasil + entry + '\n\n';
                    }
                });
                    resultDiv.value = hasil;
                
                if(hoverbool  > 0){
                    addpoints();
                    hoverbool = 0;
                }else{
                    console.log('No Points');
                }
                
            }).catch(error => {
                alert("Gagal Dapat Arti: Mohon Dicoba Lagi");
            });    
            }
            
        });

        //Tokenisasi - Fitur Pencarian
        tokenisasiButton.addEventListener('click', function(){
            const kata = textarea.value;
            console.log(kata.toLowerCase());
            const katamasuk =encodeURIComponent(kata);

            fetch(`http://localhost:3000/tokenisasi?sentence=${katamasuk}`, {
                method: 'GET'
            }).then(result => result.json())
            .then(data => {
                const words = new Set();
                Object.entries(data).forEach((a,b) => {
                let word = `${a[1].kata}: ${a[1].arti}`;
                // console.log(word);
                words.add(word);
                });
                let hasil = '';
                const stopchar = ';';
                console.log(words);
                words.forEach(entry => {
                // let stopindex = entry.indexOf(stopchar);
                // console.log(stopindex);
                // entry = entry.slice(0,40);
                // console.log(entry.slice(0,40));
                hasil = hasil + entry.slice(0,172) + '\n\n';
                });
                resultDiv.value = hasil;
                addpoints();
            }).catch(error => {
                alert("Gagal Dapat Arti: Mohon Dicoba Lagi");
            });
        });


        //Points
        function addpoints() {
            fetch(`/addpoints`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-Token': '{{csrf_token()}}'
                },
            })
            .then(result => result.json())
            .then(data => {
                const popup =document.createElement('div');
                popup.classList.add('popup');

                const message = document.createElement('p');
                message.textContent = "Selamat Anda mendapatkan dua poin";
                popup.appendChild(message);

                document.body.appendChild(popup);

                setTimeout(() => {
                    setTimeout(function (){
                        if(popup.parentNode){
                            document.body.removeChild(popup);
                        }
                }, 3000);
                })

            }).catch(error => {
                console.error('Error: ', error);
            });
        };
</script>
</x-app-layout>