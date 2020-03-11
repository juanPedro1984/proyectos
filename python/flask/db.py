import sqlite3


def get_connection():
    return sqlite3.connect(
        'microblog.db',
        detect_types=sqlite3.PARSE_DECLTYPES
    )

def get_db():
    db = get_connection()
    db.row_factory = sqlite3.Row
    return db
