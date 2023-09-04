<form action="main.php" class="search-form" method="get">
    <input type="search" placeholder="Search here.." id="search-box" name="search-book">
    
    <button type="search-box" class="btn btn-outline-primary">search</button>

</form>

<style>
    /* Style for the form */
    .search-form {
        display: flex;
        align-items: center;
    }

    /* Style for the search input */
    #search-box {
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        width: 200px;
    }

    /* Style for the search button */
    .btn {
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        padding: 10px 20px;
        margin-left: 10px;
        cursor: pointer;
    }

    /* Style for the button on hover */
    .btn:hover {
        background-color: #0056b3;
    }
</style>
