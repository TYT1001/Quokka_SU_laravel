

const fetchUsers = () => {
    axios
      .get('http://localhost:8000/api/posts')
      .then(response => {
        console.log(response.data.post)
        append(response.data.post)
      })

      .catch(error => console.log(error))
  }

  fetchUsers()
  function append(data){
    console.log(data)


    console.log(mainContainer)

    for (var i = 0; i < data.length; i++) {
        var mainContainer = document.getElementById("myData");
        var containerOne = document.createElement('div');
                var containerTwo = document.createElement('div')
                var image = document.createElement("img");
                var title = document.createElement('a')
                var titleChild = document.createElement('h5')
                var date = document.createElement('small')
                var description = document.createElement('p')
                var seeMore = document.createElement('a')
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
