import json
import glob
import urllib.request
import os
import random

# 1. Clear existing files
default_dir = 'storage/app/public/default'
for f in glob.glob(f"{default_dir}/*.jpg"):
    os.remove(f)

# 2. Download 15 defaults
print("Downloading 15 default images...")
for i in range(1, 16):
    url = f"https://api.dicebear.com/9.x/shapes/png?seed=retro{i}&backgroundColor=0F172A&shape1Color=4FC3F7"
    filepath = f"{default_dir}/imagen_tema_default{i}.jpg"
    urllib.request.urlretrieve(url, filepath)

# 3. Update JSONs
print("Updating JSONs...")
files = glob.glob('database/semillas_locales/*.json')
for file in files:
    with open(file, 'r', encoding='utf-8') as f:
        data = json.load(f)
    
    for tema in data.get('temas', []):
        rand_num = random.randint(1, 15)
        # Update portada
        tema['portada'] = f"default/imagen_tema_default{rand_num}.jpg"
        
        # Update IMAGEN block
        for bloque in tema.get('bloques', []):
            if bloque.get('tipo') == 'IMAGEN':
                # Use a different random image for the inner block
                rand_inner = random.randint(1, 15)
                bloque['metadata'] = {
                    "url": f"/storage/default/imagen_tema_default{rand_inner}.jpg"
                }

    with open(file, 'w', encoding='utf-8') as f:
        json.dump(data, f, ensure_ascii=False, indent=2)

