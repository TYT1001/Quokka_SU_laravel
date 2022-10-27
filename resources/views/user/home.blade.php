@extends('user.layout.main')
@section('content')
<section id="home" class="home-section">
    <div class="container">
        <div class="container-fluid">
            <div class="container bgfullscreen" >
            <div class="row ">
            <div class="col-sm-6 d-flex flex-column justify-content-center">
                <h1 class="text-5xl font-mono mb-3">Home page</h1>
                <p class="fs-5 my-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia harum impedit, accusamus soluta et at quos maiores architecto iusto nulla beatae, modi error reiciendis! Corrupti sapiente a consequatur officiis deleniti.</p>
                <div class="my-3">

                    <button class="btn btn-dark">Join Our Team</button>
                </div>
            </div>
            <div class="col-sm-6 content1_img">
                <img src="{{asset('image/su_logo_rounded.png')}}" class="place-items-center  home-logo">
            </div>
            </div>
            </div>
            </div>
    </div>
  </section>
  <section id="about" class="about-section">
    <div class="bg-dark">

		<div class="container cont" id="about">
			<div class="row about-us-container d-sm-flex  px-auto">
                <div class="col-sm-7 content2_img">
                    <img src="{{asset('image/activities 1.png')}}" alt="ActivitiesImage">
                </div>
                <div class="col-sm-5 content2 d-flex flex-column justify-content-center">
                <h1 class="text-5xl font-mono">About Us</h1>
                <p class="fs-5 my-3 mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
			</div>
		</div>
	</div>
    </div>
</section>
<section id="news" class="bg-teal py-5 new-section">
    <div class="container my-4">
        <div class="row">
            <div class="">
                <h1 class="text-center text-5xl font-mono mb-3">Latest News</h1>

                <div class="relative top-5">
                    <livewire:pagination />
                </div>

            </div>
     </div>








</section>


@endsection
@push('scriptSource')
    {{-- <script>
        let data = {
            selectName : ''
        }
        let livewire = document.querySelector('.livewire')

        console.log(livewire)
        document.querySelector('#select').addEventListener("change", function() {
            livewire.style.display = 'none'
            data.selectName = this.value

            axios.post('http://localhost:8000/api/selection',data)
            .then(res=>{
                let result = res.data.data;
                // console.log(result.push(res.data.data))
                clearChild()
                      append(result)
                }

            )
            .catch(err=>console.log(err))


            function append(data){


                for (var i = 0; i < data.length; i++) {
                    var mainContainer = document.getElementById("myData");
                    console.log(mainContainer)
                    var containerOne = document.createElement('div');
                            var containerTwo = document.createElement('div')
                            var image = document.createElement("img");
                            var title = document.createElement('a')
                            var titleChild = document.createElement('h5')
                            var date = document.createElement('small')
                            var description = document.createElement('p')
                            var seeMore = document.createElement('a')
                            seeMore.href = 'https://www.google.com/'
                            console.log(seeMore)
                            mainContainer.classList.add('col-6','d-flex','card-bg','py-4','px-2');
                            containerOne.classList.add('mt-2','p-3');
                            containerTwo.classList.add('pe-3')

                            console.log(mainContainer)
                            image.src =  "http://localhost/SU/public/storage/" + data[i].image
                            image.width = 100
                            containerOne.appendChild(image);
                            title.href = ''
                            titleChild.innerHTML = data[i].title
                            title.appendChild(titleChild)
                            date.innerHTML = data[i].created_at
                            description.innerHTML = data[i].description
                            seeMore.classList.add('text-decoration-none', 'text-end' ,'d-block')
                            containerTwo.append(title,date,description,seeMore)
                            mainContainer.append(containerOne,containerTwo)
                        }
            }
            function clearChild(){
                let e = document.getElementById('myData')
                let child = e.lastElementChild;
                while (child) {
                    e.removeChild(child);
                    child = e.lastElementChild;
                }
            }
        })

    </script> --}}
@endpush


