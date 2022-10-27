
        let inputVal = document.getElementById('category_name');
        let btn = document.getElementById('button')
        let data = {'category_name': 'sdsd'};
        btn.addEventListener('click',async(e)=>{
            let query = inputVal.value
            let url = (`${window.location.origin}/admin/category/create/${query}`)
            if(query){
                try {
                    let response = await axios.get(url).then(response=>{
                        console.log(response)
                    })
                } catch (error) {
                    console.log(error);
                }

            }
            else{
                document.getElementById('category_validation').textContent = 'Category is required';
            }
            inputVal.value = ''
            location.reload();
        }
        )
        <div class="stat">
              <div class="stat-title">Create Category</div>
                    <form action="">
                    @csrf
                    <div class="stat-value flex">
                        <div class="flex flex-col">
                            <input type="text" name="" id="category_name"class="input input-sm input-bordered me-2 " placeholder="Enter Category Name..">
                            <small id="category_validation" class="text-xs text-red-500 ms-2"></small>
                        </div>
                        <button class="btn btn-sm" type="submit" id="button">create</button>
                    </div>
                    </form>

            </div>

