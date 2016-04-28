  CREATE TABLE joke (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  joketext TEXT,
  jokedate DATE NOT NULL,
  authorid INT
  )DEFAULT CHARACTER SET utf8 ENGINE=InnoDB;

  CREATE TABLE author (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255),
  email VARCHAE(255)
  ) DEFAULT CHARACTER SET utf8 ENGINE=InnoDB;

  CREATE TABLE category (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255)
  ) DEFAULT CHARACTER SET utf8 ENGINE=InnoDB;

  CREATE TABLE jokecategory (
  jokeid INT NOT NULL,
  categoryid INT NOT NULL,
  PRIMARY KEY (jokeid, categoryid)
  ) DEFAULT CHARACTER SET utf8 ENGINE=InnoDB;

INSERT INTO joke (id, name, email) VALUES
(1, 'Кевин Янк', 'thatguy@kevinyank.com'),
(2, 'Джоан Смит', 'joan@example.com');

INSERT INTO joke (id, joketext, jokedate, authorid) VALUES
(1, 'Зачем цыпленок перешел дорогу? Чтобы попасть на другую сторону!', '2012-04-01', 1),
(2, 'Бабе - цветы, детям - мороженное, смотри не перепутай', '2016-04-01', 2),
(3, 'В Новый год все сбывается, даже то, что в другое время сбыть не удается.', '2016-04-28', 2),
(4, 'Сколько нужно адвокатов, чтобы вкрутить лампочку? Вопрос в другом: сколько адвокатов может себе позволить лампочка, чтобы быть вкрученной.', '2016-04-28', 2);

INSERT INTO category (id, name) VALUES
(1, 'Из фильма'),
(2, 'Через дорогу'),
(3, 'Об адвокатах'),
(4, 'Новый год');

INSERT INTO jokecategory (jokeid, categoryid) VALUES
(1, 2),
(2, 1),
(3, 4),
(4, 3);
