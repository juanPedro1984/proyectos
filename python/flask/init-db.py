from db import get_db


def init_db():
    db = get_db()
    with open('schema.sql') as f:
        db.executescript(f.read())


if __name__ == '__main__':
    init_db()
    print('Database initialized')
