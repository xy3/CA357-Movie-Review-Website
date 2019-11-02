from flask import render_template
from app import app

@app.route('/')
def index():
    user = {'username': 'Theo'}
    return render_template('home.htm.j2', title='Movie Review Homepage', user=user)
