<style>
    body,html{
    height: 100%;
    width: 100%;
    margin: 0;
    padding: 0;

    }

    .searchbar{
    margin-bottom: auto;
    margin-top: auto;
    height: 60px;
    background-color: white;
    border-radius: 30px;
    padding: 10px;
    }

    .search_input{
    color: black;
    border: 0;
    outline: 0;
    background: none;
    width: 0;
    caret-color:transparent;
    line-height: 40px;
    transition: width 0.4s linear;
    }

    .searchbar:hover > .search_input{
    padding: 0 10px;
    width: 150px;
    caret-color:black;
    transition: width 0.4s linear;
    }

    .searchbar:hover > .search_icon{
    background: white;
    color: green;
    }

    .search_icon{
    height: 40px;
    width: 40px;
    float: right;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    color: black;
    text-decoration:none;
    }
</style>
