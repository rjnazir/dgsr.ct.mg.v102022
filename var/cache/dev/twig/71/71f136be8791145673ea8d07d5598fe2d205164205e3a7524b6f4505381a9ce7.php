<?php

/* ::base.html.twig */
class __TwigTemplate_fb98a6914955f33e9ca002fd9a662b7c8d84d7be9c05ddb1eb8cddccfa8f7730 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_561bb08fa0d269bd149bc967491beb822f1772707bfe6e2746cd3dcc890e92b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_561bb08fa0d269bd149bc967491beb822f1772707bfe6e2746cd3dcc890e92b8->enter($__internal_561bb08fa0d269bd149bc967491beb822f1772707bfe6e2746cd3dcc890e92b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_e2ea501ad0be277c377a74011c8f6304829c515dd5450fcb615e4aa538937f12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2ea501ad0be277c377a74011c8f6304829c515dd5450fcb615e4aa538937f12->enter($__internal_e2ea501ad0be277c377a74011c8f6304829c515dd5450fcb615e4aa538937f12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_561bb08fa0d269bd149bc967491beb822f1772707bfe6e2746cd3dcc890e92b8->leave($__internal_561bb08fa0d269bd149bc967491beb822f1772707bfe6e2746cd3dcc890e92b8_prof);

        
        $__internal_e2ea501ad0be277c377a74011c8f6304829c515dd5450fcb615e4aa538937f12->leave($__internal_e2ea501ad0be277c377a74011c8f6304829c515dd5450fcb615e4aa538937f12_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e2f80df8b40b7fbfca0cdf350d9cc72d2831f77ec02150c67878ddcee573064a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2f80df8b40b7fbfca0cdf350d9cc72d2831f77ec02150c67878ddcee573064a->enter($__internal_e2f80df8b40b7fbfca0cdf350d9cc72d2831f77ec02150c67878ddcee573064a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d37e1f526a06c0607d0aacbd763909f85b1e5712132e51d873de08deeab93f10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d37e1f526a06c0607d0aacbd763909f85b1e5712132e51d873de08deeab93f10->enter($__internal_d37e1f526a06c0607d0aacbd763909f85b1e5712132e51d873de08deeab93f10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d37e1f526a06c0607d0aacbd763909f85b1e5712132e51d873de08deeab93f10->leave($__internal_d37e1f526a06c0607d0aacbd763909f85b1e5712132e51d873de08deeab93f10_prof);

        
        $__internal_e2f80df8b40b7fbfca0cdf350d9cc72d2831f77ec02150c67878ddcee573064a->leave($__internal_e2f80df8b40b7fbfca0cdf350d9cc72d2831f77ec02150c67878ddcee573064a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_049006a764b3918927f0ca694dea201f1e0314488e7836a707ec15e3331f89c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_049006a764b3918927f0ca694dea201f1e0314488e7836a707ec15e3331f89c9->enter($__internal_049006a764b3918927f0ca694dea201f1e0314488e7836a707ec15e3331f89c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_2f49ebe4ff14b00deb4fd4bb977f89bf688f4b64f88575dd64dce36c9f29fe29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f49ebe4ff14b00deb4fd4bb977f89bf688f4b64f88575dd64dce36c9f29fe29->enter($__internal_2f49ebe4ff14b00deb4fd4bb977f89bf688f4b64f88575dd64dce36c9f29fe29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2f49ebe4ff14b00deb4fd4bb977f89bf688f4b64f88575dd64dce36c9f29fe29->leave($__internal_2f49ebe4ff14b00deb4fd4bb977f89bf688f4b64f88575dd64dce36c9f29fe29_prof);

        
        $__internal_049006a764b3918927f0ca694dea201f1e0314488e7836a707ec15e3331f89c9->leave($__internal_049006a764b3918927f0ca694dea201f1e0314488e7836a707ec15e3331f89c9_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_fc5e8925986ca7794d93013519349ff853c5e9d42a3fd58964e1749db3f00761 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc5e8925986ca7794d93013519349ff853c5e9d42a3fd58964e1749db3f00761->enter($__internal_fc5e8925986ca7794d93013519349ff853c5e9d42a3fd58964e1749db3f00761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8fbfcfb5c266b7bf83b128f750e341c272e5f44f229eff8709fa36fe91930545 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fbfcfb5c266b7bf83b128f750e341c272e5f44f229eff8709fa36fe91930545->enter($__internal_8fbfcfb5c266b7bf83b128f750e341c272e5f44f229eff8709fa36fe91930545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8fbfcfb5c266b7bf83b128f750e341c272e5f44f229eff8709fa36fe91930545->leave($__internal_8fbfcfb5c266b7bf83b128f750e341c272e5f44f229eff8709fa36fe91930545_prof);

        
        $__internal_fc5e8925986ca7794d93013519349ff853c5e9d42a3fd58964e1749db3f00761->leave($__internal_fc5e8925986ca7794d93013519349ff853c5e9d42a3fd58964e1749db3f00761_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2f8873000b4a0487461534f3d09c4ab7fa934f4c59868d017d4752e575f304ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f8873000b4a0487461534f3d09c4ab7fa934f4c59868d017d4752e575f304ce->enter($__internal_2f8873000b4a0487461534f3d09c4ab7fa934f4c59868d017d4752e575f304ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2051e5a80106f3d608b2d23d85f80f4a934d6aba80c346dc9a141c243d6faa47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2051e5a80106f3d608b2d23d85f80f4a934d6aba80c346dc9a141c243d6faa47->enter($__internal_2051e5a80106f3d608b2d23d85f80f4a934d6aba80c346dc9a141c243d6faa47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2051e5a80106f3d608b2d23d85f80f4a934d6aba80c346dc9a141c243d6faa47->leave($__internal_2051e5a80106f3d608b2d23d85f80f4a934d6aba80c346dc9a141c243d6faa47_prof);

        
        $__internal_2f8873000b4a0487461534f3d09c4ab7fa934f4c59868d017d4752e575f304ce->leave($__internal_2f8873000b4a0487461534f3d09c4ab7fa934f4c59868d017d4752e575f304ce_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\app/Resources\\views/base.html.twig");
    }
}
