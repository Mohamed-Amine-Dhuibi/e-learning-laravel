<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/home.css">
</head>
<body>
    <section id="slider">
        <input type="radio" name="slider" id="s1" checked>
        <input type="radio" name="slider" id="s2">
        <input type="radio" name="slider" id="s3">
        <input type="radio" name="slider" id="s5">
      
        <label for="s1" id="slide1">1</label>
        <label for="s2" id="slide2">2</label>
        <label for="s3" id="slide3">3</label>
        <label for="s4" id="slide4">4</label>
        <label for="s5" id="slide5">5</label>
      </section>
      
</body>
<style>
    body {
  margin: 0;
  background: #EEE;
  user-select: none;
  font-family: sans-serif;
}


#slider {
  position: relative;
  width: 50%;
  height: 30vw;
  margin: 80px auto;
  font-family: 'Helvetica Neue', sans-serif;
  perspective: 1400px;
  transform-style: preserve-3d;
}

input[type=radio] {
  position: relative;
  top: 108%;
  left: 50%;
  width: 18px;
  height: 18px;
  margin: 0 15px 0 0;
  opacity: 0.4;
  transform: translateX(-83px);
  cursor: pointer;
}


input[type=radio]:nth-child(5) {
  margin-right: 0px;
}

input[type=radio]:checked {
  opacity: 1;
}




#slider label {
  position: absolute;
  width: 100%;
  height: 100%;
  left: 0;
  top: 0;
  color: white;
  font-size: 70px;
  font-weight: bold;
  border-radius: 5px;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: transform 400ms ease;
}

#slide1 {
  background: tomato;
}

#slide2 {
  background: yellowgreen;
}

#slide3 {
  background: dodgerblue;
}

#slide4 {
  background: slateblue;
}

#slide5 {
  background: violet;
}


/* Slider Functionality */

/* Active Slide */
#s1:checked ~ #slide1, #s2:checked ~ #slide2, #s3:checked ~ #slide3, #s4:checked ~ #slide4, #s5:checked ~ #slide5 {
  box-shadow: 0 13px 26px rgba(0,0,0, 0.3), 0 12px 6px rgba(0,0,0, 0.2);
  transform: translate3d(0%, 0, 0px);
}

/* Next Slide */
#s1:checked ~ #slide2, #s2:checked ~ #slide3, #s3:checked ~ #slide4, #s4:checked ~ #slide5, #s5:checked ~ #slide1 {
  box-shadow: 0 6px 10px rgba(0,0,0, 0.3), 0 2px 2px rgba(0,0,0, 0.2);
  transform: translate3d(15%, 0, -100px);
}


/* Next to Next Slide */
#s1:checked ~ #slide3, #s2:checked ~ #slide4, #s3:checked ~ #slide5, #s4:checked ~ #slide1, #s5:checked ~ #slide2 {
  box-shadow: 0 1px 4px rgba(0,0,0, 0.4);
  transform: translate3d(30%, 0, -250px);
}

/* Previous to Previous Slide */
#s1:checked ~ #slide4, #s2:checked ~ #slide5, #s3:checked ~ #slide1, #s4:checked ~ #slide2, #s5:checked ~ #slide3 {
  box-shadow: 0 1px 4px rgba(0,0,0, 0.4);
  transform: translate3d(-30%, 0, -250px);
}

/* Previous Slide */
#s1:checked ~ #slide5, #s2:checked ~ #slide1, #s3:checked ~ #slide2, #s4:checked ~ #slide3, #s5:checked ~ #slide4 {
  box-shadow: 0 6px 10px rgba(0,0,0, 0.3), 0 2px 2px rgba(0,0,0, 0.2);
  transform: translate3d(-15%, 0, -100px);
}





/* YouTube Link */
.youtube-link {
  position: absolute;
  bottom: 50px;
  width: 150px;
  left: 50%;
  margin-left: -75px;
  padding: 5px;
  font-weight: 700;
  color: coral;
  background: navy;
  text-align: center;
  border-radius: 0.2em;
}
</style>
</html>