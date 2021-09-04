<html>
 <head>
  <link rel="stylesheet" type="text/css" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 </head>
<body>
<div class="py-20 h-screen bg-gray-300 px-2">
    <div class="max-w-md mx-auto bg-white rounded-lg overflow-hidden md:max-w-lg">
        <div class="md:flex">
            <div class="w-full px-4 py-6 ">
             <form method="post" action="{{ route('insert.data') }}"  enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="mb-1"> 
                    <textarea type="text" name="text_img" class="h-24 py-1 px-3 w-full border-2 border-blue-400 rounded focus:outline-none focus:border-blue-600 resize-none">
                    </textarea> 
                </div>
                @if($errors->has('text_img'))
                  <p style="color:red;">{{ $errors->first('text_img') }}</p>
                @endif
                <div class="mb-1">
                    <div class="relative border-dotted h-32 rounded-lg border-dashed border-2 border-blue-700 bg-gray-100 flex justify-center items-center">
                        <div class="absolute">
                            <div class="flex flex-col items-center"> <i class="fa fa-folder-open fa-3x text-blue-700"></i> <span class="block text-gray-400 font-normal">Attach you files here</span> 
                        </div>
                        </div> <input type="file" name="image" class="h-full w-full opacity-0">
                    </div>
                 @if($errors->has('image'))
                  <p style="color:red;">{{ $errors->first('image') }}</p>
                 @endif
                </div>
               <button class="ml-2 h-10 w-32 bg-blue-600 rounded text-white hover:bg-blue-700">upload</button>
                </form>
            </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>