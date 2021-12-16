var timeLine = [
  {
    profiles: {
      picture: "https://bootdey.com/img/Content/avatar/avatar2.png",
      name: "Margarita Elina",
      location: "Alaska, USA",
      time: "7 minutes ago ",
    },
    post: "John is world famous professional photographer. with forward thinking clients to create beautiful,honest and amazing things that bring positive results. John is world famous professional photographer. with forward thinking clients to create beautiful, honest and amazing things that bring positive results.",
    likes: ["Jhon Due", "Danieal Kalion", "Danieal Kalion", "Danieal Kalion"],
    comments: [
      {
        picture: "https://bootdey.com/img/Content/avatar/avatar3.png",
        name: "Jhone due",
        comment:
          "is world famous professional photographer. with forward thinking clients to create beautiful",
        time: "40 minutes ago",
      },
      {
        picture: "https://bootdey.com/img/Content/avatar/avatar3.png",
        name: "Tawseef",
        comment:
          "is world famous professional photographer. with forward thinking clients to create beautiful",
        time: "34 minutes ago",
      },
      {
        picture: "https://bootdey.com/img/Content/avatar/avatar4.png",
        name: "Jhone due",
        comment: "is world famous professional photographer.",
        time: "15 minutes ago",
      },
      {
        picture: "https://bootdey.com/img/Content/avatar/avatar4.png",
        name: "Tawseef",
        comment:
          "thinking clients to create beautiful world famous professional photographer.",
        time: "2 minutes ago",
      },
    ],
  }

]

// let sri = timeLine.profiles.name;
// console.log(timeLine[0.profiles.name]);




function fb(data){
    // console.log(data);
    let process = document.getElementById('');


    let headerEle = document.createElement('h3'),
    paraElement = document.createElement('p'),
    divElement = document.createElement('div');
divElement.classList.add('fb-user-details');
divElement.appendChild(paraElement);
divElement.appendChild(headerEle);

let paraElement2 = document.createElement('p');
    paraElement2.classList.add('fb-user-status');

let anchorTag1 = document.createElement('a'),
    anchorTag2 = document.createElement('a'),
    anchorTag3 = document.createElement('a'),
    anchorTag4 = document.createElement('a'),
    divElement2 = document.createElement('div');
divElement2.classList.add('fb-time-action');


let anchorTag5 = document.createElement('a'),
    spanTag = document.createElement('span'),
    paraElement3 = document.createElement('p'),
    divElement3 = document.createElement('div'),
    liEle = document.createElement('li');
divElement3.appendChild(anchorTag5);
divElement3.appendChild(spanTag);
divElement3.appendChild(paraElement3);
liEle.append(divElement3);


let anchorTag6 = document.createElement('a'),
    spanTag1 = document.createElement('span'),
    paraElement4 = document.createElement('p'),
    divElement4 = document.createElement('div'),
    liEle1 = document.createElement('li');
divElement4.appendChild(anchorTag5);
divElement4.appendChild(spanTag);
divElement4.appendChild(paraElement3);
liEle1.append(divElement3);


let anchorTag7 = document.createElement('a'),
    spanTag2 = document.createElement('span'),
    paraElement5 = document.createElement('p'),
    divElement5 = document.createElement('div'),
    liEle2 = document.createElement('li');
divElement5.appendChild(anchorTag5);
divElement5.appendChild(spanTag);
divElement5.appendChild(paraElement3);
liEle2.append(divElement3);
       

}

timeLine.forEach(fb);


