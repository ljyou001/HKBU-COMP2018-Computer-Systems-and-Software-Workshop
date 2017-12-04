window.onload = initAutoFillArray;
var XMLHttpRequestObj = false;
var DataArray = new Array();
var url = "color.xml";

function initAutoFillArray() {
	document.getElementById("InputField").onkeyup = matchselections;
	if (window.XMLHttpRequest)
        { XMLHttpRequestObj = new XMLHttpRequest();
        } else if (window.ActiveXObject)
          { XMLHttpRequestObj = new ActiveXObject("Microsoft.XMLHTTP");
          }

	if (XMLHttpRequestObj)
        {
		XMLHttpRequestObj.onreadystatechange = setpulldownlist;
		XMLHttpRequestObj.open("GET", url, true);
		XMLHttpRequestObj.send(null);
	}
	else {
		alert("Something Wrong in AJax calls!");
	}
}

function setpulldownlist()
{

if (XMLHttpRequestObj.readyState == 4)
   { if (XMLHttpRequestObj.status == 200)
        { if (XMLHttpRequestObj.responseXML)
             { var allColors = XMLHttpRequestObj.responseXML.getElementsByTagName("color");
               for (var i=0; i<allColors.length; i++)
                  { DataArray[i] =
                    allColors[i].getElementsByTagName("color_name")[0].firstChild.nodeValue;
                  }
             }
        }
     else
        { alert("Something Wrong in AJax calls!");
        }
   }
}

function matchselections()
{ var Inputstr = document.getElementById("InputField").value;

  document.getElementById("InputField").className = "";
  if (Inputstr != "")
  { document.getElementById("PullDownMenu").innerHTML = "";	
    for (var i=0; i<DataArray.length; i++)
    { var CurrentMatch = DataArray[i];
      if (CurrentMatch.toLowerCase().indexOf(Inputstr.toLowerCase()) == 0)
      { var tempDiv = document.createElement("div");
	tempDiv.innerHTML = CurrentMatch;
	tempDiv.onclick = makeChoice;
	tempDiv.className = "pulldownlist";
	document.getElementById("PullDownMenu").appendChild(tempDiv);
      }
    }
    var foundCt = document.getElementById("PullDownMenu").childNodes.length;
    if (foundCt == 0)
    { document.getElementById("InputField").className = "error";
    }
    if (foundCt == 1)
    { setColor(document.getElementById("PullDownMenu").firstChild.innerHTML);
    }
  }
}

function makeChoice(thisevent)
{
 var thisDiv = (thisevent) ? thisevent.target : window.event.srcElement;
 setColor(thisDiv.innerHTML);
}

function setColor(newColor)
{
 document.getElementById("InputField").value = newColor;
 document.bgColor = newColor;	
 document.getElementById("PullDownMenu").innerHTML = "";
}