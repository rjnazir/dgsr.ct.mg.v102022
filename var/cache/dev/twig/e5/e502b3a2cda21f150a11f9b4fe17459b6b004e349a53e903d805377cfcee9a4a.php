<?php

/* @FOSUser/Resetting/reset_content.html.twig */
class __TwigTemplate_7c98579344448afa744a7b9ed4d0d5b7355576a50c8de00b8dd713d4d22b1d65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_194fb1f3e69732a6f767baacc7cd0235f765e62ef65092497abc94c549984e88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_194fb1f3e69732a6f767baacc7cd0235f765e62ef65092497abc94c549984e88->enter($__internal_194fb1f3e69732a6f767baacc7cd0235f765e62ef65092497abc94c549984e88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset_content.html.twig"));

        $__internal_a539effc4605db2b0c49c1f05ed1a5fc460d4d1fb1b0db46dcc68361c94beeb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a539effc4605db2b0c49c1f05ed1a5fc460d4d1fb1b0db46dcc68361c94beeb3->enter($__internal_a539effc4605db2b0c49c1f05ed1a5fc460d4d1fb1b0db46dcc68361c94beeb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_reset", array("token" => ($context["token"] ?? $this->getContext($context, "token")))), "attr" => array("class" => "fos_user_resetting_reset")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.reset.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_194fb1f3e69732a6f767baacc7cd0235f765e62ef65092497abc94c549984e88->leave($__internal_194fb1f3e69732a6f767baacc7cd0235f765e62ef65092497abc94c549984e88_prof);

        
        $__internal_a539effc4605db2b0c49c1f05ed1a5fc460d4d1fb1b0db46dcc68361c94beeb3->leave($__internal_a539effc4605db2b0c49c1f05ed1a5fc460d4d1fb1b0db46dcc68361c94beeb3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  37 => 6,  32 => 4,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{{ form_start(form, { 'action': path('fos_user_resetting_reset', {'token': token}), 'attr': { 'class': 'fos_user_resetting_reset' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'resetting.reset.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "@FOSUser/Resetting/reset_content.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\reset_content.html.twig");
    }
}
