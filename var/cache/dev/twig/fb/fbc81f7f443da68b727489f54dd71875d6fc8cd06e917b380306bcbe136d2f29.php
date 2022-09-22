<?php

/* @FOSUser/ChangePassword/change_password_content.html.twig */
class __TwigTemplate_9d5cdc368c0bfeaeb9d3f383e8c369a8c2d3efee729bf1a0fcf9d89c32e0087b extends Twig_Template
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
        $__internal_09fbcce6ea3c4e6bc3e85dbf3016b09ef4c7e4d48448d0eab32cc305af0259fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09fbcce6ea3c4e6bc3e85dbf3016b09ef4c7e4d48448d0eab32cc305af0259fc->enter($__internal_09fbcce6ea3c4e6bc3e85dbf3016b09ef4c7e4d48448d0eab32cc305af0259fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password_content.html.twig"));

        $__internal_ccfa809d98dca68ddb2178c13599a008e6c643afba28f7d48e1a329b679a4b87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccfa809d98dca68ddb2178c13599a008e6c643afba28f7d48e1a329b679a4b87->enter($__internal_ccfa809d98dca68ddb2178c13599a008e6c643afba28f7d48e1a329b679a4b87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password"), "attr" => array("class" => "fos_user_change_password")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("change_password.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_09fbcce6ea3c4e6bc3e85dbf3016b09ef4c7e4d48448d0eab32cc305af0259fc->leave($__internal_09fbcce6ea3c4e6bc3e85dbf3016b09ef4c7e4d48448d0eab32cc305af0259fc_prof);

        
        $__internal_ccfa809d98dca68ddb2178c13599a008e6c643afba28f7d48e1a329b679a4b87->leave($__internal_ccfa809d98dca68ddb2178c13599a008e6c643afba28f7d48e1a329b679a4b87_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password_content.html.twig";
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

{{ form_start(form, { 'action': path('fos_user_change_password'), 'attr': { 'class': 'fos_user_change_password' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'change_password.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "@FOSUser/ChangePassword/change_password_content.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\ChangePassword\\change_password_content.html.twig");
    }
}
