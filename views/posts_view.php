<?php logout(); ?>
<div class="bg-white">
    <nav class="bg-gray-900 fixed w-full top-0 z-10">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex-shrink-0">
                    <!--  -->
                </div>
                <div class="hidden md:block">
                    <div class="flex items-center ml-4 md:ml-6">
                        <button class="p-1 text-gray-400 border-2 border-transparent rounded-full hover:text-white focus:outline-none focus:text-white focus:bg-gray-700" aria-label="Notifications">
                            <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                            </svg>
                        </button>

                        <div class="relative ml-3">
                            <div>
                                <button class="flex items-center max-w-xs text-sm text-white rounded-full focus:outline-none focus:shadow-solid" id="user-menu" aria-label="User menu" aria-haspopup="true">
                                    <img class="w-8 h-8 rounded-full" src="https://images.unsplash.com/photo-1592242481757-a0519c3d0d89?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="" />
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex -mr-2 md:hidden">
                    <button class="inline-flex items-center justify-center p-2 text-gray-400 rounded-md hover:text-white hover:bg-gray-700 focus:outline-none focus:bg-gray-700 focus:text-white">
                        <svg class="block w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!--START Sidebar -->

    <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-gray-400 text-gray-800">
        <div class="fixed flex flex-col top-0 left-0 w-64 bg-gray-900 h-full border-r">
            <div class="flex items-center justify-center h-14 border-b">
                <div>Sidebar Navigation By iAmine</div>
            </div>
            <div class="overflow-y-auto overflow-x-hidden flex-grow">
                <ul class="flex flex-col py-4 space-y-1">
                    <li class="px-5">
                        <div class="flex flex-row items-center h-8">
                            <div class="text-sm font-light tracking-wide text-gray-500">Menu</div>
                        </div>
                    </li>
                    <li>
                        <a href="index.php?page=home" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-50 text-gray-300 hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500 pr-6">
                            <span class="inline-flex justify-center items-center ml-4">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                                </svg>
                            </span>
                            <span class="ml-2 text-sm tracking-wide truncate">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="index.php?page=Users" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-50 text-gray-300 hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500 pr-6">
                            <span class="inline-flex justify-center items-center ml-4">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path>
                                </svg>
                            </span>
                            <span class="ml-2 text-sm tracking-wide truncate">Users</span>
                            <span class="px-2 py-0.5 ml-auto text-xs font-medium tracking-wide text-indigo-500 bg-indigo-50 rounded-full">New</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class=" w- relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-50 text-gray-300 hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500 pr-6">
                            <span class="inline-flex justify-center items-center ml-4">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                                </svg>
                            </span>
                            <span class="ml-2 text-sm tracking-wide truncate">Posts</span>
                        </a>
                    </li>



                    <li class="px-5">
                        <div class="flex flex-row items-center h-8">
                            <div class="text-sm font-light tracking-wide text-gray-500">Settings</div>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-50 text-gray-300 hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500 pr-6">
                            <span class="inline-flex justify-center items-center ml-4">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </span>
                            <span class="ml-2 text-sm tracking-wide truncate">Profile</span>
                        </a>
                    </li>
                    <li>
                        <a href="register.php" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-50 text-gray-300 hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500 pr-6">
                            <span class="inline-flex justify-center items-center ml-4">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                                </svg>
                            </span>
                            <span class="ml-2 text-sm tracking-wide truncate">Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="absolute top-16 right-0 -my-2 overflow-x-auto w-4/5   ">
        <div style="min-height: 578px;" class="align-middle inline-block min-w-full shadow overflow-hidden bg-white shadow-dashboard px-8 pt-3 rounded-bl-lg rounded-br-lg h-4/5">

            <main id="manageUsers_index" class="p-4">
                <section class="flex justify-between mb-4">
                    <div class="text-2xl font-semibold">Posts</div>
                    <a href="index.php?page=add_post" class="flex items-center bg-blue-500 text-white p-2 rounded-md">
                        <ion-icon name="pencil-outline" role="img" class="md:hydrated mr-2"></ion-icon>
                        <p>Add Post</p>
                    </a>
                </section>

                <table id="result-posts" class="min-w-full bg-white border border-gray-300 shadow-md rounded-md overflow-hidden">
                    <thead class="bg-gray-200 text-gray-700">
                        <tr>
                            <th>Author</th>
                            <th>Idpost</th>
                            <th>Title</th>
                            <th>Body</th>
                            <th class="py-2 px-4">Action</th>
                        </tr>
                    </thead>
                    <tbody id="postTableBody"></tbody>
                </table>
            </main>
        </div>
    </div>
</div>

<script>
        var users = [];


        $(document).ready(function () {
            // Initialize DataTable
            $('#result-posts').DataTable({
                "ajax": {
                    "url": "https://jsonplaceholder.typicode.com/posts",
                    "dataSrc": "",
                    "type": 'GET',
                },
                "columns": [
                    { "data": "userId", "render": function (data) { return users[data - 1].username; } },
                    { "data": "id" },
                    { "data": "title" },
                    { "data": "body" },
                    {
                        data: 'id',
                        render: function(data) {
                            return `<button onclick="deletePost(${data})" name="btn" class="text-red-500 hover:underline mr-2">delete</button>` +
                                `<a href="index.php?page=edit_post" class="delete_btn text-blue-500 hover:underline focus:outline-none focus:ring focus:border-red-300" data-id="' + data + '">edit</a>`;
                        }
                    }
                ]
            });

            // Fetch users data
            fetch('https://jsonplaceholder.typicode.com/users')
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(dataUsers => {
                    users = dataUsers;
                })
                .catch(error => {
                    console.error('Error during users API request', error);
                });
        });
    </script>