package com.e.s.demopayroll;

import android.app.Activity;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.view.animation.Animation;
import android.view.animation.AnimationUtils;
import android.widget.ImageView;
import android.widget.LinearLayout;
import android.widget.TextView;

public class SplashActivity extends Activity implements Animation.AnimationListener {
    Animation animFadeIn,animblink;
    LinearLayout linearLayout;
    ImageView ImageView;
    TextView textView;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.splash_screen);


        animFadeIn = AnimationUtils.loadAnimation(getApplicationContext(),
                R.anim.fade_in);

        animFadeIn.setAnimationListener(this);

        linearLayout = (LinearLayout) findViewById(R.id.linear);

        linearLayout.setVisibility(View.VISIBLE);
        linearLayout.startAnimation(animFadeIn);
        animblink = AnimationUtils.loadAnimation(getApplicationContext(),
                R.anim.blink2);

        animblink.setAnimationListener(this);

        textView = (TextView) findViewById(R.id.text);

        textView.setVisibility(View.VISIBLE);
        textView.startAnimation(animblink);

    }

    @Override
    public void onBackPressed() {
        this.finish();
        super.onBackPressed();
    }

    @Override
    public void onAnimationStart(Animation animation) {


    }

    public void onAnimationEnd(Animation animation) {

        Intent i = new Intent(SplashActivity.this, LoginActivity.class);
        startActivity(i);
        this.finish();
    }

    @Override
    public void onAnimationRepeat(Animation animation) {

    }


}
