<?php

/* @FOSUser/Profile/edit_content.html.twig */
class __TwigTemplate_ed03118c4ade4e1be41dc5afe9fc717be0837f10aa5b47acd04a23cefa3ea252 extends Twig_Template
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
        $__internal_9b7272b75ef572b86197045e5af5d558b5ce60f5ae99cd3aca5a25cccda7a90c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b7272b75ef572b86197045e5af5d558b5ce60f5ae99cd3aca5a25cccda7a90c->enter($__internal_9b7272b75ef572b86197045e5af5d558b5ce60f5ae99cd3aca5a25cccda7a90c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit_content.html.twig"));

        $__internal_9d2fe4d9cd43e53b3921fd5a93b58d58de85024d3278ba4490859029dc649ca4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d2fe4d9cd43e53b3921fd5a93b58d58de85024d3278ba4490859029dc649ca4->enter($__internal_9d2fe4d9cd43e53b3921fd5a93b58d58de85024d3278ba4490859029dc649ca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_9b7272b75ef572b86197045e5af5d558b5ce60f5ae99cd3aca5a25cccda7a90c->leave($__internal_9b7272b75ef572b86197045e5af5d558b5ce60f5ae99cd3aca5a25cccda7a90c_prof);

        
        $__internal_9d2fe4d9cd43e53b3921fd5a93b58d58de85024d3278ba4490859029dc649ca4->leave($__internal_9d2fe4d9cd43e53b3921fd5a93b58d58de85024d3278ba4490859029dc649ca4_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit_content.html.twig";
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

{{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'profile.edit.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "@FOSUser/Profile/edit_content.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\edit_content.html.twig");
    }
}
