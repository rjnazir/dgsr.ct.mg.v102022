<?php

/* @FOSUser/Resetting/request_content.html.twig */
class __TwigTemplate_346739e17d40f0949b91752bb1d8565cb86e803ad86a4fd5423be050f9e52fe2 extends Twig_Template
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
        $__internal_16ce81cf5a76845a4d1a1ef628d8a9693f35d48b7583bd33fb8135d508f0c623 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16ce81cf5a76845a4d1a1ef628d8a9693f35d48b7583bd33fb8135d508f0c623->enter($__internal_16ce81cf5a76845a4d1a1ef628d8a9693f35d48b7583bd33fb8135d508f0c623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request_content.html.twig"));

        $__internal_67aefa6fa582e8f41fe2abaf493d07a34bba8a8733df24f1984c68c1fe23dff7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67aefa6fa582e8f41fe2abaf493d07a34bba8a8733df24f1984c68c1fe23dff7->enter($__internal_67aefa6fa582e8f41fe2abaf493d07a34bba8a8733df24f1984c68c1fe23dff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request_content.html.twig"));

        // line 2
        echo "
<form action=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_16ce81cf5a76845a4d1a1ef628d8a9693f35d48b7583bd33fb8135d508f0c623->leave($__internal_16ce81cf5a76845a4d1a1ef628d8a9693f35d48b7583bd33fb8135d508f0c623_prof);

        
        $__internal_67aefa6fa582e8f41fe2abaf493d07a34bba8a8733df24f1984c68c1fe23dff7->leave($__internal_67aefa6fa582e8f41fe2abaf493d07a34bba8a8733df24f1984c68c1fe23dff7_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 9,  33 => 5,  28 => 3,  25 => 2,);
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

<form action=\"{{ path('fos_user_resetting_send_email') }}\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">{{ 'resetting.request.username'|trans }}</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"{{ 'resetting.request.submit'|trans }}\" />
    </div>
</form>
", "@FOSUser/Resetting/request_content.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\request_content.html.twig");
    }
}
