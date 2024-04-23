<style type="text/css">
html{
    scroll-behavior:smooth;
}
*{
    margin :0;
    padding: 0;
    box-sizing : border-box;
}
.nav_style{
 background-color:#4E73C3;
}
.nav_style a{
    color : white;
    font-size: 18px;
}
.leftside{
    padding:30px;
}
.rightside{
    font-size: 18px;
    padding : 50px;
}
.main_header{
    height:350px;
    width:100%;
}
.rightside h1{
    font-size :2.5rem;
}
.corona img{
    animation : gocorona 3s linear infinite;
}
.space1{
   line-height: 1.8em;
}
.space2{
    margin :15px;
}

@keyframes gocorona{
    0% {transform :rotate(0);}
    100%{transform:rotate(360deg);}
}
.leftside img{
    animation : heartbeat 5s linear infinite;
}
@keyframes heartbeat{
    0%{transform : scale(.75);}
    20%{transform:scale(1);}
    40%{transform:scale(.75);}
    60%{transform:scale(1);}
    80%{transform:scale(.75);}
    100%{transform:scale(.75);}
}

/*****************corona update**************/
.corona_uptd{
    /*up left bottom right*/
    margin: 0 0 30px 0;
}

.corona_uptd h3{
   color :#a29bfe;
}
.corona_uptd h1{ 
    font-size:2rem;
    text-align:center;
}

/* ****************section*****************/
.sub_section {
    background-color:#fbfafd;
}

/* footer*/
.footer_style{
    background-color:#4E73C3;
}
.footer_style p{
    margin-bottom : 0!important;
}

/* form*/
fieldset {
  display: inline-grid;
  line-height: 1.5;
}
</style>