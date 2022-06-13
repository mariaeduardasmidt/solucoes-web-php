function handleBookList() {
    const bookList = document.querySelector('#card-book-list')
    const bookListDisplay = bookList.style.display

    if (bookListDisplay == 'block') {
        bookList.style.display = 'none'
    } else {
        bookList.style.display = 'block'
    }
}