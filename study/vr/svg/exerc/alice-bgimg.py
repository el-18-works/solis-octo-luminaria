#!/usr/bin/env python3

class Path :

  def __init__(ipse, x=0, y=0, k=1, att="") :
    ipse.x, ipse.y, ipse.k =x, y, k
    ipse.d =[]
    ipse.att=att

  def xy(ipse, a) :
    for i,x in enumerate(a) :
      if i%2 :
        ipse.d.append(str(x * ipse.k))
      else :
        ipse.d.append(str(x * ipse.k))

  def XY(ipse, a) :
    for i,x in enumerate(a) :
      if i%2 :
        ipse.d.append(str((x + ipse.y) * ipse.k))
      else :
        ipse.d.append(str((x + ipse.x) * ipse.k))

  def M(ipse, *a) :
    ipse.d.append('M')
    ipse.XY(a)

  def L(ipse, *a) :
    ipse.d.append('L')
    ipse.XY(a)

  def l(ipse, *a) :
    ipse.d.append('l')
    ipse.xy(a)

  def C(ipse, *a) :
    ipse.d.append('C')
    ipse.XY(a)

  def c(ipse, *a) :
    ipse.d.append('c')
    ipse.xy(a)

  def S(ipse, *a) :
    ipse.d.append('S')
    ipse.XY(a)

  def Q(ipse, *a) :
    ipse.d.append('Q')
    ipse.XY(a)

  def T(ipse, *a) :
    ipse.d.append('T')
    ipse.XY(a)

  def Z(ipse) :
    ipse.d.append('Z')

  def __str__(ipse) :
    return '<path d="%s" %s />'%(' '.join(ipse.d), ipse.att)

def apath(fd, m, l) :
  s ='stroke="rgba(10,200,10,0.3)" stroke-width="0.6" fill="rgba(255,100,100,0.2)"'
  p =Path(70+m/l, 70+m/l, l, s)
  p.M(26, 3.75)
  p.C(22.5, 4.25, 20.15, 6.5, 18.75, 11.5)
  p.S(16,    21,   12.5, 23.75)
  p.S(10.5, 31.5, 13.75, 33.85)
  p.C(13, 33, 12.5, 32, 12.75, 31)
  p.C(13.5, 33.5, 14.5, 34.5, 15.66, 35.25)
  p.C(14.75, 34, 14.25, 33, 14.125, 32)
  p.C(15, 34, 16.2, 35.25, 18.75, 36.25)
  p.C(18, 34.5, 17.5, 33.5, 17.85, 32.5)
  p.Q(19.5, 33.25, 20, 33)
  p.Q(20.22, 33.25, 20, 34)
  p.C(19.25, 35.5, 18.95, 38, 18.5, 39)
  p.S(18.45, 40.5, 18.75, 41)
  p.S( 19.66, 42.25, 20.5, 43.125)
  p.C(13.66, 45.75, 12.5, 46.5, 10, 51)
  p.Q(10, 51, 10.5, 51.25)
  p.C(11.5, 51.33, 12.75, 52.25, 14, 52.75)
  p.C(11.5, 54.33, 9, 57, 6.5, 59.5)
  p.Q(6.25, 59.75, 6.25, 60)
  p.C(6.75, 60.25, 7.5, 61, 8.15, 61.5)
  p.C(7.66, 62.25, 6.75, 62.66, 6.25, 62.95)
  p.Q(5.85, 63.25, 6.25, 63.25)
  p.Q(6.75, 63.125, 8.125, 63.5)
  p.C(7.85, 64.75, 8.5, 65, 10.75, 64.75)
  p.C(10.5, 66, 11.5, 66.33, 13.25, 65.5)
  p.C(13.125, 66.5, 13.33, 66.66, 14.25, 66.85)
  p.C(12.75, 68.75, 12.5, 69.5, 15.5, 68.5)
  p.C(15.66, 69.75, 16.5, 70, 18.125, 69.5)
  p.C(18.33, 70.5, 19.25, 70.75, 20.66, 69.75)
  p.C(21, 71, 22.125, 71.5, 23.66, 70.33)
  p.C(23.66, 71.25, 24.5, 71.5, 25.66, 71.66)
  p.C(25.5, 72.5, 25.75, 74.5, 26.25, 76.5)
  p.S(26.75, 78,  27.125, 80.25)
  p.S(27.5, 82, 26.5, 85)
  p.S(26.33, 87.75, 27.25, 87.85)
  p.S(27.5, 87.95, 28.125, 88)
  p.C(29.5, 89.5, 31.5, 90.25, 33.25, 90.5)
  p.S(35.5, 90, 35.75, 90)
  p.C(36, 89, 35.25, 88.5, 32.75, 85.75)
  p.C(32.85, 85.5, 32.75, 85.5, 33.25, 85.66)
  p.S(34.5, 86.25, 35.5, 86.33)
  p.S(38.25, 86.75, 39.75, 86.125)
  p.S(39.5, 84.5, 37.75, 83.5)
  p.S(34.25, 82, 33.75, 80)
  p.S(33.5, 75.5, 33.85, 74.5)
  p.S(34.24, 72, 34.25, 71.5)
  p.C(34.75, 71.5, 35.5, 71.75, 35.8, 70.75)
  p.C(36.5, 71.75, 37.5, 71.75, 38, 70.75)
  p.C(38.75, 71.75, 40, 71.75, 40.5, 70.5)
  p.C(41.5, 71.5,   42.25, 71, 42.66, 70)
  p.C(44.5, 71, 45.25, 70, 44.5, 69.33)
  p.C(45.5, 69.25, 45.25, 69, 44.75, 68)
  p.S(44.5, 67.5, 44.75, 66.85)
  p.C(46, 67.75, 46.75, 67, 46.66, 66)
  p.C(46.75, 66.33, 48, 66.5, 48.33, 66.33)
  p.S(48.5, 66, 48.125, 65.666)
  p.S(47.5, 64.5, 47, 62.5)
  p.S(46, 59.75, 47, 59.75)
  p.S(49, 59.5, 49.5, 58.75)
  p.S(48, 54, 45, 48)
  p.S(40, 40.5, 39.75, 39.5)
  p.S(39.25, 38.5, 39.25, 37.75)
  p.S(39.125, 33, 39, 32)
  p.C(40.25, 31.75, 41.25, 30.75, 41.75, 30)
  p.S(42, 28.75, 40.75, 26)
  p.S(38.25, 21.85, 36.85, 22.75)
  p.Q(35.125, 22, 34.25, 21.25)
  p.C(34.75, 20.75, 35.25, 20.75, 35.75, 20.85)
  p.S(37.25, 20.5, 37.33, 19.75)
  p.S(37.125, 18.75, 37.25, 18)
  p.C(37, 17.5, 37.75, 16, 38.25, 15.5)
  p.S(38.5, 15.25, 37.95, 14.875)
  p.S(37.5, 14.25, 37.125, 14)
  p.S(36.85, 12.75, 36.66, 12.125)
  p.S(37, 11.5, 36.75, 10)
  p.S(36.75, 6, 33.25, 4.66)
  p.S(30, 4.25, 28, 3.75)
  p.Z()
  p.M(23.5, 40.5)
  p.C(22.75, 40.125, 22.5, 39.5, 22.5, 39.125)
  p.S(22.5, 38.25, 22.75, 38)
  p.S(23, 37.75, 22.85, 37.5)
  p.S(22.75, 37, 23, 36.75)
  p.S(23.25, 36.125, 23.33, 35.95)
  p.S(23.85, 35.75, 24, 35.85)
  p.S(24.25, 36, 24.5, 36.5)
  p.S(24.5, 37.75, 24.25, 38)
  p.S(24.33, 38.25, 24.45, 38.5)
  p.S(24.5, 39.75, 24.25, 40.125)
  p.Z()
  print(str(p))
  fd.write(str(p))

def main(imfnom, ofnom, m=20) :
  from PIL import Image
  with Image.open(imfnom) as im :
    w,h =im.size
  fd =open(ofnom, 'w')
  fd.write('''<svg 
  xmlns="http://www.w3.org/2000/svg" 
  xmlns:xlink="http://www.w3.org/1999/xlink"
  width="%s" height="%s" >'''%(w+m*2, h+m*2))
  fd.write('''<rect x="1" y="1" width="%s" height="%s" 
  fill="white" stroke="rgba(200,10,10,10)" 
  stroke-width="2" />'''%(w+m*2-2, h+m*2-2))
  fd.write('<g>')
  l =5
  style='style="stroke:rgba(200,10,10,0.5); stroke-width:0.2"'
  style5='style="stroke:rgba(200,10,10,0.5); stroke-width:0.5"'
  style10='style="stroke:rgba(10,10,200,0.5); stroke-width:1"'
  for i in range(int(w/l)) :
    if i%10 == 0 :
      s ='fill="rgba(10,100,10,20)" font-size="11px"'
      fd.write('<text x="%s" y="%s" %s>%s</text>'%(m+i*l, 15, s, i))
    if i%10 == 0 : s =style10
    elif i%5 == 0 : s =style5
    else : s =style
    fd.write('<line x1="%s" y1="%s" x2="%s" y2="%s" %s />'%(m+i*l, m, m+i*l, h+m, s))
  fd.write('</g>')
  fd.write('<g>')
  for i in range(int(h/l)) :
    if i%10 == 0 :
      s ='fill="rgba(10,100,10,20)" font-size="11px" transform="rotate(-90 %s,%s)"'%(15,m+i*l)
      fd.write('<text x="%s" y="%s" %s>%s</text>'%(15, m+i*l, s, i))
    if i%10 == 0 : s =style10
    elif i%5 == 0 : s =style5
    else : s =style
    fd.write('<line x1="%s" y1="%s" x2="%s" y2="%s" %s />'%(m, m+i*l, w+m, m+i*l, s))
  fd.write('</g>')
  with open(imfnom, 'br') as fp :
    from base64 import b64encode
    bdata =b64encode(fp.read()).decode()
    url ='data:image/png;base64,' + bdata
    fd.write('<image x="%s" y="%s" height="%s" width="%s"'%(m/2, m/2, w, h) + 
    ' xlink:href="%s" />'%url)
  apath(fd, m, l)
  fd.write('</svg>')


if __name__ == "__main__" :

  from sys import argv
  imfnom ="alice-bg.png"
  ofnom ="cache/mesh.svg"
  if len(argv) > 2 :
    imfnom, ofnom =argv[1:3]
    print(imfnom,ofnom)
  main(imfnom, ofnom)


