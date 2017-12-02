package com.e.s.demopayroll;

import android.content.Intent;
import android.os.Bundle;
import android.support.annotation.NonNull;
import android.support.v7.app.AppCompatActivity;
import android.view.View;
import android.widget.Button;
import android.widget.ImageView;
import android.widget.TextView;

import com.google.android.gms.location.places.ui.PlacePicker;

public class image extends AppCompatActivity
{
    ImageView image;
    SelectImageHelper helper;
    Button location;
    TextView text;
    int PLACE_PICKER_REQUEST = 1;

    private PlacePicker.IntentBuilder builder;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_image);
        image = (ImageView) findViewById(R.id.image);
        location = (Button) findViewById(R.id.location);
        helper = new SelectImageHelper(image.this, image);
        builder = new PlacePicker.IntentBuilder();

        image.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                helper.selectImageOption();
            }
        });
        location.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {

                Intent i =new Intent(image.this,location.class);
                startActivity(i);

            }
        });


    }




   @Override
   protected void onActivityResult(int requestCode,int resultCode,Intent result)
   {
        helper.handleResult(requestCode,resultCode,result);  // call this helper class method
   }

   @Override
   public void onRequestPermissionsResult(final int requestCode,final @NonNull String[]permissions,final @NonNull int[]grantResults){
        helper.handleGrantedPermisson(requestCode,grantResults);   // call this helper class method
        }
}


