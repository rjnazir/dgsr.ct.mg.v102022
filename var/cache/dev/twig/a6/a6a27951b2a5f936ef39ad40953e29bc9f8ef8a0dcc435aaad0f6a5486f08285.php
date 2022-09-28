<?php

/* AdminBundle:CtProvince:edit.html.twig */
class __TwigTemplate_ef7ea236f3e3a62285b60a5e6e7787b86aa5ba725cb965c476f5c31bf937a8d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtProvince:edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "backoffice/base_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_644e3da22023a202b483e1085b3360cd44135e57a916b4d27d3997e606de3cf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_644e3da22023a202b483e1085b3360cd44135e57a916b4d27d3997e606de3cf9->enter($__internal_644e3da22023a202b483e1085b3360cd44135e57a916b4d27d3997e606de3cf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtProvince:edit.html.twig"));

        $__internal_25b8c1ffd96be028a004a9359370eb587f64c46234d334361fa8041c78e2a0e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25b8c1ffd96be028a004a9359370eb587f64c46234d334361fa8041c78e2a0e9->enter($__internal_25b8c1ffd96be028a004a9359370eb587f64c46234d334361fa8041c78e2a0e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtProvince:edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_province"] = true;
        // line 8
        $context["menu_province_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_644e3da22023a202b483e1085b3360cd44135e57a916b4d27d3997e606de3cf9->leave($__internal_644e3da22023a202b483e1085b3360cd44135e57a916b4d27d3997e606de3cf9_prof);

        
        $__internal_25b8c1ffd96be028a004a9359370eb587f64c46234d334361fa8041c78e2a0e9->leave($__internal_25b8c1ffd96be028a004a9359370eb587f64c46234d334361fa8041c78e2a0e9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_286f0d3919f0115d8a075d6abc46969303136f30ba5f44a1acc9417a2d177ee5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_286f0d3919f0115d8a075d6abc46969303136f30ba5f44a1acc9417a2d177ee5->enter($__internal_286f0d3919f0115d8a075d6abc46969303136f30ba5f44a1acc9417a2d177ee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bd51aad11a168bb148d547a1e5987b9ffc33be222ca51d05d310b0e30d2fd58b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd51aad11a168bb148d547a1e5987b9ffc33be222ca51d05d310b0e30d2fd58b->enter($__internal_bd51aad11a168bb148d547a1e5987b9ffc33be222ca51d05d310b0e30d2fd58b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Province ";
        
        $__internal_bd51aad11a168bb148d547a1e5987b9ffc33be222ca51d05d310b0e30d2fd58b->leave($__internal_bd51aad11a168bb148d547a1e5987b9ffc33be222ca51d05d310b0e30d2fd58b_prof);

        
        $__internal_286f0d3919f0115d8a075d6abc46969303136f30ba5f44a1acc9417a2d177ee5->leave($__internal_286f0d3919f0115d8a075d6abc46969303136f30ba5f44a1acc9417a2d177ee5_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_726b684a2df565bf628d9a63bef064b31709b212710686e5d9db70c70ab36c80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_726b684a2df565bf628d9a63bef064b31709b212710686e5d9db70c70ab36c80->enter($__internal_726b684a2df565bf628d9a63bef064b31709b212710686e5d9db70c70ab36c80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_424b05e10fac9fa06ccec5f66c3de5b38681ee05a80f97701fdf538a84a57041 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_424b05e10fac9fa06ccec5f66c3de5b38681ee05a80f97701fdf538a84a57041->enter($__internal_424b05e10fac9fa06ccec5f66c3de5b38681ee05a80f97701fdf538a84a57041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 12
            echo "        <div class=\"callout callout-success\">
            ";
            // line 13
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 17
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 18
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer une province</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "prvNom", array()), 'row');
        echo "
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "prvCode", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_province\"/>
                        <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("province_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_424b05e10fac9fa06ccec5f66c3de5b38681ee05a80f97701fdf538a84a57041->leave($__internal_424b05e10fac9fa06ccec5f66c3de5b38681ee05a80f97701fdf538a84a57041_prof);

        
        $__internal_726b684a2df565bf628d9a63bef064b31709b212710686e5d9db70c70ab36c80->leave($__internal_726b684a2df565bf628d9a63bef064b31709b212710686e5d9db70c70ab36c80_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtProvince:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 42,  137 => 37,  129 => 32,  125 => 31,  116 => 25,  110 => 21,  101 => 18,  98 => 17,  93 => 16,  84 => 13,  81 => 12,  76 => 11,  67 => 10,  48 => 5,  38 => 1,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'backoffice/base_admin.html.twig' %}

{% form_theme edit_form ':form:custom_fields.html.twig' %}

{% block title %}{{ parent() }} Modification Province {% endblock %}

{% set menu_province        = true %}
{% set menu_province_create = true %}

{% block body %}
    {% for flashMessage in app.session.flashbag.get('success') %}
        <div class=\"callout callout-success\">
            {{ flashMessage }}
        </div>
    {% endfor %}
    {% for flashMessage in app.session.flashbag.get('error') %}
        <div class=\"callout callout-danger\">
            {{ flashMessage }}
        </div>
    {% endfor %}

    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                {{ form_start(edit_form) }}
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer une province</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.prvNom) }}
                        {{ form_row(edit_form.prvCode) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_province\"/>
                        <a href=\"{{ path('province_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtProvince:edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtProvince/edit.html.twig");
    }
}
