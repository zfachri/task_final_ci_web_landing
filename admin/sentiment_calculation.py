# sentiment-calculation.py

from textblob import TextBlob
import sys

def analyze_sentiment(text):
    blob = TextBlob(text)
    polarity = blob.sentiment.polarity
    return 'Positif' if polarity > 0 else ('Negatif' if polarity < 0 else 'Netral')

if __name__ == "__main__":
    # Baca input teks dari file teks
    with open('./admin/news_text.txt', 'r', encoding='utf-8') as file:
        news_text = file.read()

    # Analisis sentimen
    sentiment_result = analyze_sentiment(news_text)

    # Output hasil analisis sentimen
    print(sentiment_result)
