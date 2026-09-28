"""Baseline rule-based predictor. Replace with trained ML model when field dataset is available."""
def predict(soil_moisture, temperature, rainfall):
    if soil_moisture < 35 and rainfall < 2: return {'risk':'tinggi','irrigation':'ON','message':'Kebutuhan irigasi tinggi'}
    if soil_moisture < 50: return {'risk':'sedang','irrigation':'MONITOR','message':'Pantau kelembapan'}
    return {'risk':'rendah','irrigation':'OFF','message':'Kondisi normal'}
if __name__=='__main__': print(predict(32,29,0))
