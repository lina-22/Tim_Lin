//API = https://testimonialapi.toolcarton.com/api
let commentsData = [{
    "id": 1,
    "name": "Lance Jarvis",
    "location": "London, UK",
    "designation": "General Manager ",
    "avatar": "https://testimonialapi.toolcarton.com/avatar/1.jpg",
    "message": "We have been using product for last one year, and I have to say that it has transformed the way we do business. Thank you for awesome service.",
    "lorem": "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas non fringilla leo. Phasellus dui erat, ultrices sollicitudin ante quis, convallis varius odio. Quisque sed tristique ante.",
    "rating": 4.8,
    "audio": "https://testimonialapi.toolcarton.com/audio/1.mp3"
}, {
    "id": 2,
    "name": "Juliet Wright",
    "location": "Sweden",
    "designation": "Technical Director",
    "avatar": "https://testimonialapi.toolcarton.com/avatar/2.jpg",
    "message": "It has changed the way I used the website. Product lets you create anything you envision and it does it so easy and flawless. I can't imagine not working with the service.",
    "lorem": "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas non fringilla leo. Phasellus dui erat, ultrices sollicitudin ante quis, convallis varius odio. Quisque sed tristique ante.",
    "rating": 4.4,
    "audio": "https://testimonialapi.toolcarton.com/audio/2.mp3"
}, {
    "id": 3,
    "name": "Michael D.",
    "location": "Austin, Texas",
    "designation": "Investor",
    "avatar": "https://testimonialapi.toolcarton.com/avatar/3.jpg",
    "message": "Insights from service drove 30% lift in our conversions, this product service is essential for your company growth strategy.",
    "lorem": "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas non fringilla leo. Phasellus dui erat, ultrices sollicitudin ante quis, convallis varius odio. Quisque sed tristique ante.",
    "rating": 4.5,
    "audio": "https://testimonialapi.toolcarton.com/audio/3.mp3"
}, {
    "id": 4,
    "name": "Kylie Lutz",
    "location": "Paris, France",
    "designation": "Freelancer",
    "avatar": "https://testimonialapi.toolcarton.com/avatar/4.jpg",
    "message": "The company really helped with my personal branding - everything from conception to execution was amazing and super professional. Looking forwards for upgradation.",
    "lorem": "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas non fringilla leo. Phasellus dui erat, ultrices sollicitudin ante quis, convallis varius odio. Quisque sed tristique ante.",
    "rating": 5,
    "audio": "https://testimonialapi.toolcarton.com/audio/4.mp3"
}, {
    "id": 5,
    "name": "Mark Twin",
    "location": "Berlin, Germany",
    "designation": "Developer",
    "avatar": "https://testimonialapi.toolcarton.com/avatar/5.jpg",
    "message": "Best company I have ever deal with online! Quick delivery and excellent customer service. Will definetly upgrade the service.",
    "lorem": "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas non fringilla leo. Phasellus dui erat, ultrices sollicitudin ante quis, convallis varius odio. Quisque sed tristique ante.",
    "rating": 4.5,
    "audio": "https://testimonialapi.toolcarton.com/audio/5.mp3"
}, {
    "id": 6,
    "name": "Anne",
    "location": "New York, USA",
    "designation": "Content Writer & Artist",
    "avatar": "https://testimonialapi.toolcarton.com/avatar/6.jpg",
    "message": "These folks are my go-to for any design or branding services. Excellent communication and I feel like I'm always a priority for them.",
    "lorem": "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas non fringilla leo. Phasellus dui erat, ultrices sollicitudin ante quis, convallis varius odio. Quisque sed tristique ante.",
    "rating": 4.7,
    "audio": "https://testimonialapi.toolcarton.com/audio/6.mp3"
}, {
    "id": 7,
    "name": "Bryan S.",
    "location": "Sydney, Australia",
    "designation": "Manager",
    "avatar": "https://testimonialapi.toolcarton.com/avatar/7.jpg",
    "message": "Love your stuff, the quality has been incredible year after year. I tell everyone I know that they have to try the product. Thank you to the team the whole team.",
    "lorem": "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas non fringilla leo. Phasellus dui erat, ultrices sollicitudin ante quis, convallis varius odio. Quisque sed tristique ante.",
    "rating": 4.7,
    "audio": "https://testimonialapi.toolcarton.com/audio/7.mp3"
}, {
    "id": 8,
    "name": "Kamren Hays",
    "location": "Florida, USA",
    "designation": "Marketing Head",
    "avatar": "https://testimonialapi.toolcarton.com/avatar/8.jpg",
    "message": "Product bring 10x multiplier in terms of both ease and spread of use. I'm able to quickly and easily execute on my marketing strategies. That the fundamental difference from other services.",
    "lorem": "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas non fringilla leo. Phasellus dui erat, ultrices sollicitudin ante quis, convallis varius odio. Quisque sed tristique ante.",
    "rating": 4.8,
    "audio": "https://testimonialapi.toolcarton.com/audio/8.mp3"
}, {
    "id": 9,
    "name": "Diane Smith",
    "location": "New York, USA",
    "designation": "Sales Head",
    "avatar": "https://testimonialapi.toolcarton.com/avatar/9.jpg",
    "message": "Team offers a powerful suite of tools that every client must have. And if you get stuck their support team will help out. Its is fast, reliable and has no complications at all.",
    "lorem": "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas non fringilla leo. Phasellus dui erat, ultrices sollicitudin ante quis, convallis varius odio. Quisque sed tristique ante.",
    "rating": 4.1,
    "audio": "https://testimonialapi.toolcarton.com/audio/9.mp3"
}, {
    "id": 10,
    "name": "Mikayla Mccullough",
    "location": "Madrid, Spain",
    "designation": "Designer",
    "avatar": "https://testimonialapi.toolcarton.com/avatar/10.jpg",
    "message": "The vibe, level of inquiry, feedback and traffic at our product services and newly designed booth at a recent conference was very positive.",
    "lorem": "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas non fringilla leo. Phasellus dui erat, ultrices sollicitudin ante quis, convallis varius odio. Quisque sed tristique ante.",
    "rating": 4.9,
    "audio": "https://testimonialapi.toolcarton.com/audio/10.mp3"
}]

let search_comments = document.querySelector("#search_comments");
let commentsList = document.querySelector("#commentsList");
let commentsDisplay = document.querySelector("#commentsDisplay");


// 1st function declare

// function xx(commentList){
//     let chaine = "";
//     /*html*/`
//     <option>$"{.name}"</option>`

//   search_comments.innerHTML=chaine;
// }

// xx(commetsData);

let listDisplayer = (list) => {
    let optionToAdd = "";
    for(let data of list) {
        optionToAdd += `
        <option value='${data.name}'></option>
        `
    }
    return commentsList.innerHTML =  optionToAdd;
}
listDisplayer(commentsData);

let displayAllComments = (list) =>{
    let div = "";
    for(let comment of list){
        div += `
        <comment>${comment.rating}
        <img src= "${comment.avatar}"></img>
        </comment>`
    }
    return commentsDisplay.innerHTML = div;
}

displayAllComments(commentsData);


let serchComment = (searchValue, commentList) => {
    let filteredComments = [];
    for(let data of commentList) {
        if(data.name.toLowerCase() == searchValue.toLowerCase()) {
            filteredComments.push(data);
        }
    }
    console.log(filteredComments);
    displayAllComments(filteredComments);
    
}

search_comments.addEventListener("input", ()=>{
    serchComment(search_comments.value.toLowerCase(), commentsData);
})