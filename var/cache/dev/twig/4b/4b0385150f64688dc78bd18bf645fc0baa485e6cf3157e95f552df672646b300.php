<?php

/* @Admin/CtZoneDeserte/edit.html.twig */
class __TwigTemplate_094a6ca3c270bc8e6a88a949d75efce5f5cc3782a349feab88966a2504a6ee9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtZoneDeserte/edit.html.twig", 1);
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
        $__internal_5a50d0c82555810e03d4a93160907095918dccd5e9a16cacdbc12292960d9d32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a50d0c82555810e03d4a93160907095918dccd5e9a16cacdbc12292960d9d32->enter($__internal_5a50d0c82555810e03d4a93160907095918dccd5e9a16cacdbc12292960d9d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtZoneDeserte/edit.html.twig"));

        $__internal_2dd1b3d3b32f0885e559a703233bc19391738604c94ad299014e69f9af153741 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dd1b3d3b32f0885e559a703233bc19391738604c94ad299014e69f9af153741->enter($__internal_2dd1b3d3b32f0885e559a703233bc19391738604c94ad299014e69f9af153741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtZoneDeserte/edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_zone_deserte"] = true;
        // line 8
        $context["menu_zone_deserte_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a50d0c82555810e03d4a93160907095918dccd5e9a16cacdbc12292960d9d32->leave($__internal_5a50d0c82555810e03d4a93160907095918dccd5e9a16cacdbc12292960d9d32_prof);

        
        $__internal_2dd1b3d3b32f0885e559a703233bc19391738604c94ad299014e69f9af153741->leave($__internal_2dd1b3d3b32f0885e559a703233bc19391738604c94ad299014e69f9af153741_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_43c4584213b4da4a69c874cd8e8feb950b138666023af5cb6c535b08f27639fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43c4584213b4da4a69c874cd8e8feb950b138666023af5cb6c535b08f27639fd->enter($__internal_43c4584213b4da4a69c874cd8e8feb950b138666023af5cb6c535b08f27639fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6585ffa02a290ab3ba581269b73c5891970460591a5b9dbb9621d121f563325f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6585ffa02a290ab3ba581269b73c5891970460591a5b9dbb9621d121f563325f->enter($__internal_6585ffa02a290ab3ba581269b73c5891970460591a5b9dbb9621d121f563325f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Zone de déserte ";
        
        $__internal_6585ffa02a290ab3ba581269b73c5891970460591a5b9dbb9621d121f563325f->leave($__internal_6585ffa02a290ab3ba581269b73c5891970460591a5b9dbb9621d121f563325f_prof);

        
        $__internal_43c4584213b4da4a69c874cd8e8feb950b138666023af5cb6c535b08f27639fd->leave($__internal_43c4584213b4da4a69c874cd8e8feb950b138666023af5cb6c535b08f27639fd_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_67b7e1f3ce7c855348a2ef04a45e9b0cc2e9a3b0919ed154bc3bee0e3b304463 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67b7e1f3ce7c855348a2ef04a45e9b0cc2e9a3b0919ed154bc3bee0e3b304463->enter($__internal_67b7e1f3ce7c855348a2ef04a45e9b0cc2e9a3b0919ed154bc3bee0e3b304463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cfe7296ed7a9dad88900ef73a1dd08029ea2ee9b316ad1b806585b19a9c5246d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfe7296ed7a9dad88900ef73a1dd08029ea2ee9b316ad1b806585b19a9c5246d->enter($__internal_cfe7296ed7a9dad88900ef73a1dd08029ea2ee9b316ad1b806585b19a9c5246d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Editer une zone_deserte</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "zdLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_zone_deserte\"/>
                        <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("zone_deserte_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_cfe7296ed7a9dad88900ef73a1dd08029ea2ee9b316ad1b806585b19a9c5246d->leave($__internal_cfe7296ed7a9dad88900ef73a1dd08029ea2ee9b316ad1b806585b19a9c5246d_prof);

        
        $__internal_67b7e1f3ce7c855348a2ef04a45e9b0cc2e9a3b0919ed154bc3bee0e3b304463->leave($__internal_67b7e1f3ce7c855348a2ef04a45e9b0cc2e9a3b0919ed154bc3bee0e3b304463_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtZoneDeserte/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 41,  133 => 36,  125 => 31,  116 => 25,  110 => 21,  101 => 18,  98 => 17,  93 => 16,  84 => 13,  81 => 12,  76 => 11,  67 => 10,  48 => 5,  38 => 1,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} Modification Zone de déserte {% endblock %}

{% set menu_zone_deserte        = true %}
{% set menu_zone_deserte_create = true %}

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
                        <h3 class=\"box-title\">Editer une zone_deserte</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.zdLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_zone_deserte\"/>
                        <a href=\"{{ path('zone_deserte_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtZoneDeserte/edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtZoneDeserte\\edit.html.twig");
    }
}
