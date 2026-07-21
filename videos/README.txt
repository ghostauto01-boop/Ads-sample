CREATEBYMOH CINEMATIC VIDEOS DIRECTORY
======================================

This folder holds the looping muted autoplay campaign videos used by the
campaign cards and the UGC phone player on every page:

- /videos/perfume/    (parfum-gomme.mp4, bleu-chanel.mp4, sparda-amber.mp4,
                       lost-cherry.mp4, oud-greatness.mp4, evien-blossom.mp4)
- /videos/streetwear/ (shirt-swap.mp4, hoodie-lookbook.mp4, tracksuit.mp4,
                       retro-tee.mp4, cargo-sweatpants.mp4, heavyweight-fleece.mp4)
- /videos/jewelry/    (gilded-chain.mp4, gold-ring.mp4, diamond-pendant.mp4,
                       silver-band.mp4, crystal-cuff.mp4)

CURRENT FILES
-------------
The .mp4 files currently committed are lightweight 6-second looping
placeholders (480x854 H.264, muted, faststart) generated from the poster
thumbnails so the site plays and displays correctly out of the box.

REPLACING WITH REAL CAMPAIGN FOOTAGE
------------------------------------
1. Drop your own .mp4 in the matching subfolder using the EXACT same file
   name (e.g. videos/perfume/parfum-gomme.mp4). No code changes needed.
2. For best performance keep them: vertical 9:16, <= 1080px wide,
   H.264, no audio track, under ~3 MB, and encoded with faststart
   (ffmpeg: -movflags +faststart).
3. Update the matching poster in /thumbs/ if the first frame differs —
   the poster is what shows instantly while the video streams in.

The pages lazy-load each video only when it approaches the viewport and
autoplay it muted on loop; offscreen videos pause automatically.
