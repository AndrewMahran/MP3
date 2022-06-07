from flask import Flask, render_template, request
import youtube_dl
import wget

app = Flask(__name__)


@app.route('/')
def index():
    return render_template('index.html')


@app.route('/', methods=['POST'])
def getvalue():
    url = request.form['url']
    video_info = youtube_dl.YoutubeDL().extract_info(url=url,download=False)
    filename = f"{video_info['title']}.mp3"
    # wget.download(filename, out=path)
    options={
        'format':'bestaudio/best',
        'keepvideo':False,
        'outtmpl':filename,
    }
    with youtube_dl.YoutubeDL(options) as ydl:
        ydl.download([video_info['webpage_url']])
        print(filename)
    return render_template('index.html', u=url)


if __name__ == '__main__':
    app.run(debug=True)
print(__name__)

