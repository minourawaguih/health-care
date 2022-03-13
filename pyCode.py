
import os 
from keras.preprocessing import image
import sys
import tensorflow as tf
import h5py

from tensorflow.keras import Sequential
from tensorflow.keras.layers import Conv2D, Activation, Dense, MaxPooling2D, Flatten, Dropout, GlobalAveragePooling2D
from tensorflow.keras.applications.vgg16 import VGG16
from tensorflow.keras.models import Model
import time
from tensorflow.keras import layers
import itertools
from tensorflow.keras.preprocessing.image import ImageDataGenerator
import numpy as np
import matplotlib.pyplot as plt
from sklearn.metrics import log_loss
from sklearn.utils import class_weight
from tensorflow.keras.optimizers import SGD
from sklearn.metrics import roc_curve, auc
from sklearn.metrics import classification_report,confusion_matrix, accuracy_score
from tensorflow.python.framework.ops import disable_eager_execution
from keras.callbacks import TensorBoard
from tensorflow.keras.utils import to_categorical
from keras import models 

x=sys.argv[1];
img = image.load_img(x,target_size=(64,64))
img = np.asarray(img)

plt.imshow(img)
img = np.expand_dims(img, axis=0)
img = img/255.
saved_model = models.load_model(r"C:\xampp\htdocs\laravel.trial1-Final\laravel.trial\my-blog\vgg16.h5")




output = saved_model.predict(img)
y_classes = output.argmax(axis=-1)
y_pred = np.round(output)
print (y_pred)
if y_pred==0:
    print("parasitized")
else:
    print('uninfected')