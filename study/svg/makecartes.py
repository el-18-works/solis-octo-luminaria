#!/usr/bin/python3

from cartes import Generate, Card, element_path as epath, figure_path as fpath, etc_path as apath
import sys

# spade, 0 heart, 0 diamond, club
# 0 spade, heart, diamond, 0 club

#gr =1.618
#poker size 2.5 x 3.5 inches (64x89mm), B8 size.
#bridge (2.25 x 3.5 inches (57 x 89mm))

if __name__ == "__main__" and "wireframe" in sys.argv :
	for i in epath :
		g =Generate(epath[i])
		wf =g.wireframe()
		if i == 1 :
			n ="spade"
		elif i == 2 :
			n ="openheart"
		elif i == 3 :
			n ="opendiamond"
		elif i == 4 :
			n ="club"
		elif i == 5 :
			n ="openspade"
		elif i == 6 :
			n ="heart"
		elif i == 7 :
			n ="diamond"
		elif i == 8 :
			n ="openclub"
		wf.save(open("cache/path%d-%s.jpg"%(i,n), "w"))
	for i,fp in enumerate(fpath) :
		g =Generate(fp)
		wf =g.wireframe()
		n ="figure"
		wf.save(open("cache/path%d-%s.jpg"%(i,n), "w"))
	for i,fp in enumerate(apath) :
		g =Generate(fp)
		wf =g.wireframe()
		n ="etc"
		wf.save(open("cache/path%d-%s.jpg"%(i,n), "w"))


if __name__ == "__main__" and "suite-light" in sys.argv :
	for p in ("spade", "heart", "diamond", "club") :
		for n in range(13) :
			c =Card(p, (2.5, 4.5), gradient=0)
			svg =c(25, n+1, 0.5, 2, "card-light")
			open("cache/card-light_%s_%d.svg"%(p,n), "w").write(svg)
	svg =c(25, 0, 0.5, 2, "card-light")
	open("cache/card-light_%d.svg"%(n), "w").write(svg)

if __name__ == "__main__" and "test" in sys.argv :
	g0 =Generate(fpath[0])
	g1 =Generate(fpath[10])
	cx,cy =g1.origin
	p =g1((cx-130,cy), (0.66666,0,0,1))
	p +=g0((cx+130,cy), (0.66666,0,0,1))
	g =Generate(p)
	wf =g.wireframe()
	wf.save(open("cache/test.jpg", "w"))

	c =Card("club", (2.5, 4.5), gradient=1)
	svg =c(25, 0, 0.5, 2, "card")
	open("cache/test.svg", "w").write(svg)

