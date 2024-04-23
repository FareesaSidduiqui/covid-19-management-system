<style type="text/css">
body{
    margin:0;
    padding:0;
}
.grid-container{
    display:grid;
    grid-template columns:260px 1fr 1fr 1fr;
    grid-template-rows: 0.2fr 3fr;
    grid-tempalte-areas:
    "sidebar header header header"
    "sidebar main main main";
    height:100vh;
}

/********** Header *********/
.header{
    grid-area: header;
    height:70px;
    background-color:#4E73C3;
}

/********** SideBar *********/
#sidebar{
    grid-area: sidebar;
    height:100%;
    background-color:grey;
}

/********** Main *********/
.main-container{
    grid-area: main;
    background-color:beige;
}
</style>