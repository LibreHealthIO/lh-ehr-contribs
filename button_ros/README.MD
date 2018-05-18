A general review of systems form.  Requires button <span class="checkbox-button"> in the css themes.
Place the /themes directory in /interface/main/themes for this functionality, or
better yet add the following to your desired theme to ensure compatibility:
/*
/*button_ros*/

#ros {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    width: 100%;
    border-collapse: collapse;
    background: #f5f5f5;
}

#ros td, #ros th {
    font-size: 1em;
    padding: 3px 0 2px 7px;
}

#ros th {
    font-size: 1.1em;
    text-align: left;
    padding-top: 5px;
    padding-bottom: 4px;
    color: #ffffff;
    background-color: #eeeeee;
    color: black;    
}

#ros tr.alt td {
    color: #000000;
    background-color: #EAF2D3;
}

.checkbox-button {
  margin: 1pt 1pt 2pt 1pt;
  padding:0;
  display: inline-block;
}
.checkbox-button input[type=checkbox] {
	display: none;
}
.checkbox-button label {
	text-size: 16pt;
  background: linear-gradient(to bottom, #eeeeee 0%, #cccccc 100%);
  color: #333333;
  border: 1px solid #333333;
  border-radius: 4px;
  margin: 1pt;
 	padding: 0 3pt 0 3pt;
  box-shadow: 1px 1px 2px rgba(0,0,0,0.15);
}
.checkbox-button input[type=checkbox]:checked + label {
  background: linear-gradient(to bottom, #cc1100 0%, #E42F02 100%);
  background: linear-gradient(to bottom, #f1db35 0%, #fefcea 100%);
  font-weight: bold;
  padding: 0 1.8pt 1.8pt;
  box-shadow: none;
}
label {
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -khtml-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
} 
*/