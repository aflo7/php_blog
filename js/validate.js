
console.log('validate.js')
const showFields = () => {
  const commentForm = document.getElementById("comment-form")
  commentForm.classList.remove("hidden-fields")
}

const validateForm = () => {

  const submitBtn = document.getElementById("submit-comment-btn")
  submitBtn.disabled = true
  
  const emailRe =
    /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/
  let x = document.forms["comment-form"]["comment"].value
  let y = document.forms["comment-form"]["author"].value
  let z = document.forms["comment-form"]["email"].value
  let username = document.forms["comment-form"]["username"].value

  if (x == "" || y == "") {
    alert("Comment and field must be filled out!")
    return false
  }
  if (username == "") {
    alert("Username must be filled out.")
    return false
  }
  if (!emailRe.test(z)) {
    alert("Email is improperly formatted")
    return false
  }
}
