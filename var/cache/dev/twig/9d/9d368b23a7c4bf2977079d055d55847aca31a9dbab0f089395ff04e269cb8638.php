<?php

/* @Admin/CtTypeReception/edit.html.twig */
class __TwigTemplate_42ab296132ba8bf2cd54f98fe8cb374316e00e85aef810871c843bb6b5879443 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtTypeReception/edit.html.twig", 1);
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
        $__internal_b87035973ffbd8ca813e6c51142fa42ed22501d5f27f893209b3714a5c8063e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b87035973ffbd8ca813e6c51142fa42ed22501d5f27f893209b3714a5c8063e0->enter($__internal_b87035973ffbd8ca813e6c51142fa42ed22501d5f27f893209b3714a5c8063e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtTypeReception/edit.html.twig"));

        $__internal_01d2146cd1c101cb6ea18e2888660d40ba18f0fc3092ae025e84bbd290f2ac3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01d2146cd1c101cb6ea18e2888660d40ba18f0fc3092ae025e84bbd290f2ac3a->enter($__internal_01d2146cd1c101cb6ea18e2888660d40ba18f0fc3092ae025e84bbd290f2ac3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtTypeReception/edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_reception"] = true;
        // line 8
        $context["menu_type_reception"] = true;
        // line 9
        $context["menu_type_reception_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b87035973ffbd8ca813e6c51142fa42ed22501d5f27f893209b3714a5c8063e0->leave($__internal_b87035973ffbd8ca813e6c51142fa42ed22501d5f27f893209b3714a5c8063e0_prof);

        
        $__internal_01d2146cd1c101cb6ea18e2888660d40ba18f0fc3092ae025e84bbd290f2ac3a->leave($__internal_01d2146cd1c101cb6ea18e2888660d40ba18f0fc3092ae025e84bbd290f2ac3a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e4e92e1f01fc401cac922b188295295e53fd7fd68c146d682ff97376eae784ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4e92e1f01fc401cac922b188295295e53fd7fd68c146d682ff97376eae784ea->enter($__internal_e4e92e1f01fc401cac922b188295295e53fd7fd68c146d682ff97376eae784ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cd0f8594647f59d8988cda70bab3c0b4c8250ecdce287369a629d95616ddb3ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd0f8594647f59d8988cda70bab3c0b4c8250ecdce287369a629d95616ddb3ce->enter($__internal_cd0f8594647f59d8988cda70bab3c0b4c8250ecdce287369a629d95616ddb3ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Type de réception ";
        
        $__internal_cd0f8594647f59d8988cda70bab3c0b4c8250ecdce287369a629d95616ddb3ce->leave($__internal_cd0f8594647f59d8988cda70bab3c0b4c8250ecdce287369a629d95616ddb3ce_prof);

        
        $__internal_e4e92e1f01fc401cac922b188295295e53fd7fd68c146d682ff97376eae784ea->leave($__internal_e4e92e1f01fc401cac922b188295295e53fd7fd68c146d682ff97376eae784ea_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5af4cfd61275e8c6e90b1101b2053f589c126a1957183e6306de9c56255bfe6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5af4cfd61275e8c6e90b1101b2053f589c126a1957183e6306de9c56255bfe6e->enter($__internal_5af4cfd61275e8c6e90b1101b2053f589c126a1957183e6306de9c56255bfe6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c9c59d517a47478780a2474e02dd7d4234e097621e767cbf4699bf300c0c3ab9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9c59d517a47478780a2474e02dd7d4234e097621e767cbf4699bf300c0c3ab9->enter($__internal_c9c59d517a47478780a2474e02dd7d4234e097621e767cbf4699bf300c0c3ab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 13
            echo "        <div class=\"callout callout-success\">
            ";
            // line 14
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 18
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 19
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer un type de réception</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "tprcpLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_type_reception\"/>
                        <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_reception_index");
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
        
        $__internal_c9c59d517a47478780a2474e02dd7d4234e097621e767cbf4699bf300c0c3ab9->leave($__internal_c9c59d517a47478780a2474e02dd7d4234e097621e767cbf4699bf300c0c3ab9_prof);

        
        $__internal_5af4cfd61275e8c6e90b1101b2053f589c126a1957183e6306de9c56255bfe6e->leave($__internal_5af4cfd61275e8c6e90b1101b2053f589c126a1957183e6306de9c56255bfe6e_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtTypeReception/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 42,  135 => 37,  127 => 32,  118 => 26,  112 => 22,  103 => 19,  100 => 18,  95 => 17,  86 => 14,  83 => 13,  78 => 12,  69 => 11,  50 => 5,  40 => 1,  38 => 9,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} Modification Type de réception {% endblock %}

{% set menu_reception             = true %}
{% set menu_type_reception        = true %}
{% set menu_type_reception_create = true %}

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
                        <h3 class=\"box-title\">Editer un type de réception</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.tprcpLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_type_reception\"/>
                        <a href=\"{{ path('type_reception_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtTypeReception/edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtTypeReception\\edit.html.twig");
    }
}
