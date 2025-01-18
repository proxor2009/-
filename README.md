# liblib
Разработка системы для управления библиотекой
# Система управления библиотекой

## Описание
Данная система управления библиотекой предназначена для эффективного хранения информации о книгах и читателях, а также управления процессами взятия и возврата книг. Она разработана с использованием языка PHP и состоит из трёх основных классов: `Book`, `Reader` и `Library`.

## Установка
1. **Клонируйте репозиторий**:
git clone <url-репозитория>
cd <имя-репозитория>


2. **Подготовьте веб-сервер** (например, Apache или Nginx) для запуска PHP-скриптов.

3. **Запустите `index.php` в браузере**: открыв `http://localhost/<путь-к-репозиторию>/index.php`.

## Структура проекта
- **Book.php** — Определяет класс книги с атрибутами и методами.
- **Reader.php** — Определяет класс читателя с возможностью брать и возвращать книги.
- **Library.php** — Определяет класс библиотеки для управления книгами и читателями.
- **index.php** — Пример использования классов.

## Классы и методы

### Класс `Book`
Используется для представления книги в библиотеке.

#### Свойства:
- `title` — название книги (строка).
- `author` — автор книги (строка).
- `year` — год издания (целое число).
- `isAvailable` — доступность книги (булево значение).

#### Методы:
- `getTitle()` — возвращает название книги.
- `getAuthor()` — возвращает автора книги.
- `getYear()` — возвращает год издания.
- `getAvailability()` — возвращает статус доступности.
- `setAvailability($status)` — изменяет статус доступности книги.

**Пример использования**:
```php
$book = new Book("1984", "George Orwell", 1949);
echo $book->getTitle(); // Вывод: 1984
Класс Reader
Используется для представления читателя.

Свойства:
name — имя читателя (строка).
email — адрес электронной почты (строка).
borrowedBooks — массив книг, которые читатель взял (по умолчанию пустой массив).
Методы:
getName() — возвращает имя читателя.
getEmail() — возвращает email читателя.
borrowBook($book) — позволяет взять книгу, если она доступна.
returnBook($book) — позволяет вернуть книгу.
Пример использования:

php
Copied
Copy code
$reader = new Reader("Alice", "alice@example.com");
$reader->borrowBook($book); // Читатель взял книгу
Класс Library
Используется для управления библиотекой, книгами и читателями.

Свойства:
books — массив всех книг в библиотеке.
readers — массив всех читателей.
Методы:
addBook($book) — добавляет книгу в библиотеку.
addReader($reader) — добавляет читателя в систему.
findBook($title) — ищет книгу по названию.
listBooks() — выводит список всех книг.
Пример использования:

php
Copied
Copy code
$library = new Library();
$library->addBook($book);
$library->listBooks(); // Выводит список всех книг в библиотеке
Примеры работы
В файле index.php приведены примеры работы с классами. Вы можете запускать этот файл в браузере, чтобы увидеть, как устроена работа системы.

Лицензия
Этот проект доступен под лицензией MIT. Вы можете использовать этот код в своих проектах, но оставляйте упоминание о оригинальном авторе.

Контакты
Если у вас есть вопросы или предложения, вы можете связаться со мной по электронной почте: ваш_email@example.com.


Этот `README.md` содержит все необходимые данные, чтобы пользователи могли понять, как работает система, как её установить и использовать, а также информацию о каждом из классов и их методах.
